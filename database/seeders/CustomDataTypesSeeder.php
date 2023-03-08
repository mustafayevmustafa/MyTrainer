<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataType;

class CustomDataTypesSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'trainers');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'trainers',
                'display_name_singular' => 'Trainer',
                'display_name_plural'   => 'Trainers',
                'icon'                  => 'voyager-people',
                'model_name'            => 'App\Models\Trainer',
                'controller'            => null,
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }


        $dataType = $this->dataType('slug', 'sliders');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'sliders',
                'display_name_singular' => 'Slider',
                'display_name_plural'   => 'Sliders',
                'icon'                  => 'voyager-images',
                'model_name'            => 'App\Models\Slider',
                'controller'            => null,
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }



        $dataType = $this->dataType('slug', 'pakets');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'pakets',
                'display_name_singular' => 'Paket',
                'display_name_plural'   => 'Pakets',
                'icon'                  => 'voyager-activity',
                'model_name'            => 'App\Models\Paket',
                'controller'            => null,
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }

        $dataType = $this->dataType('slug', 'customers');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'customers',
                'display_name_singular' => 'Customer',
                'display_name_plural'   => 'Customers',
                'icon'                  => 'voyager-person  ',
                'model_name'            => 'App\Models\Customer',
                'controller'            => null,
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }
    }

    /**
     * [dataType description].
     *
     * @param [type] $field [description]
     * @param [type] $for   [description]
     *
     * @return [type] [description]
     */
    protected function dataType($field, $for)
    {
        return DataType::firstOrNew([$field => $for]);
    }
}
