<?php

/**
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license.
 *
 * Copyright (c) 2015-2017 Yuuki Takezawa
 *
 */

namespace Ytake\Annotations;

use Illuminate\Support\ServiceProvider;

/**
 * Class AnnotationServiceProvider
 */
class AnnotationServiceProvider extends ServiceProvider
{
    /** @var bool */
    protected $defer = true;

    public function boot()
    {

    }

    public function register()
    {
        /**
         * for package configure
         */
        $configPath = __DIR__ . '/config/laravel-annotations.php';
        $this->mergeConfigFrom($configPath, 'laravel-annotations');
        $this->publishes([$configPath => config_path('laravel-annotations.php')], 'annotations');
    }

    /**
     * @return array
     */
    public function provides()
    {
        return [

        ];
    }
}
