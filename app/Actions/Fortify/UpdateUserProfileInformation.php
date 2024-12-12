<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;

class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{
    /**
     * Validate and update the given user's profile information.
     *
     * @param  array<string, string>  $input
     */
    public function update(User $user, array $input): void
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'], // Validation for full name

            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('users')->ignore($user->id),
            ],
            'phone-number' => ['required', 'string', 'max:255'],
            'birthday' => ['nullable', 'date'],  // Add validation for birthday (nullable, must be a date)
        ])->validateWithBag('updateProfileInformation');


        // If the email is different and the user needs verification, update their email and send verification
        if ($input['email'] !== $user->email && $user instanceof MustVerifyEmail) {
            $this->updateVerifiedUser($user, $input);
        } else {
            // Save the  name, email, phone number, and birthday
            $user->forceFill([
                'name' =>$input['name'],
                'email' => $input['email'],
                'phone-number' => $input['phone-number'], // Add phone number here
                'birthday' => $input['birthday'], // Save birthday here
            ])->save();
        }
    }

    /**
     * Update the given verified user's profile information.
     *
     * @param  array<string, string>  $input
     */
    protected function updateVerifiedUser(User $user, array $input): void
    {
        $user->forceFill([
            'name' =>$input['name'],
            'email' => $input['email'],
            'email_verified_at' => null, // Reset the verification date
            'birthday' => $input['birthday'], // Save birthday here as well
        ])->save();

        $user->sendEmailVerificationNotification();
    }
}

