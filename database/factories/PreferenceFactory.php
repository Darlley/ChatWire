<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PreferenceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = User::class;

    public function definition()
    {
        return [
            'user_id' => randomElement($array = array(1, 2)), 
            'notify_emails' => randomElement($array = array(true, false)), 
            'notify' => randomElement($array = array(true, false)), 
            'background_color' => '#ffffff'
        ];
    }
}
