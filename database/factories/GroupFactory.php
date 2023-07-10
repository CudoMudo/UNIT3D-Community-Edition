<?php
/**
 * NOTICE OF LICENSE.
 *
 * UNIT3D Community Edition is open-sourced software licensed under the GNU Affero General Public License v3.0
 * The details is bundled with this project in the file LICENSE.txt.
 *
 * @project    UNIT3D Community Edition
 *
 * @author     HDVinnie <hdinnovations@protonmail.com>
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html/ GNU Affero General Public License v3.0
 */

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Group;

class GroupFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = Group::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name'             => $this->faker->name(),
            'slug'             => $this->faker->unique()->slug(),
            'position'         => $this->faker->randomNumber(),
            'level'            => $this->faker->randomNumber(),
            'download_slots'   => $this->faker->randomNumber(),
            'color'            => $this->faker->word(),
            'icon'             => $this->faker->word(),
            'effect'           => $this->faker->word(),
            'is_internal'      => $this->faker->boolean(),
            'is_owner'         => $this->faker->boolean(),
            'is_admin'         => $this->faker->boolean(),
            'is_modo'          => $this->faker->boolean(),
            'is_trusted'       => $this->faker->boolean(),
            'is_immune'        => $this->faker->boolean(),
            'is_freeleech'     => $this->faker->boolean(),
            'is_double_upload' => $this->faker->boolean(),
            'is_refundable'    => $this->faker->boolean(),
            'can_upload'       => $this->faker->boolean(),
            'is_incognito'     => $this->faker->boolean(),
            'autogroup'        => $this->faker->boolean(),
        ];
    }
}
