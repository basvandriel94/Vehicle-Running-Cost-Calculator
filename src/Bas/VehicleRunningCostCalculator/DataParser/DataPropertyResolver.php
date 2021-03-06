<?php
    /**
     * The MIT License (MIT)
     *
     * Copyright (c) 2014 Bas van Driel
     *
     * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated
     * documentation files (the "Software"), to deal in the Software without restriction, including without limitation
     * the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and
     * to permit persons to whom the Software is furnished to do so, subject to the following conditions:
     *
     * The above copyright notice and this permission notice shall be included in all copies or substantial portions of
     * the Software.
     *
     * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO
     * THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
     * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF
     * CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
     * DEALINGS IN THE SOFTWARE.
     */

    namespace Bas\VehicleRunningCostCalculator\DataParser;


    /**
     * Defines the utility methods for resolving data properties for vehicle types
     *
     * @package   Bas\VehicleRunningCostCalculator\DataParser
     *
     * @author    Bas van Driel <basvandriel94@gmail.com>
     * @copyright 2015 Bas van Driel
     * @license   MIT
     */
    class DataPropertyResolver
    {
        /**
         * Resolves the "weight class" (not an actual class) based on the inputted data array (where the weight classes
         * are) and the vehicle's weight
         *
         * @param array $data          The inputted data array where the weight classes should exist
         * @param float $vehicleWeight The vehicle type's weight
         *
         * @return int The resolved weight class
         */
        public static function resolveWeightClass(array $data, $vehicleWeight) {
            $weightClasses      = array_keys($data);
            $weightClassesCount = count($weightClasses) - 1;
            for ($weightClassIndex = 0; $weightClassIndex < $weightClassesCount; $weightClassIndex++) {
                $weightClass       = $weightClasses[$weightClassIndex];
                $secondWeightClass = $weightClasses[$weightClassIndex + 1];
                if ($secondWeightClass > $vehicleWeight) {
                    return $weightClass;
                }
            }
            return $weightClasses[$weightClassIndex];
        }
    }