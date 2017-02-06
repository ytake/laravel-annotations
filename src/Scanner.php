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

use ReflectionClass;
use Doctrine\Common\Annotations\AnnotationReader;

/**
 * Class Scanner
 */
class Scanner
{
    /** @var array */
    protected $classes;

    /** @var AnnotationReader */
    protected $reader;

    /** @var string[] */
    protected $classAnnotations = [];

    /** @var string[] */
    protected $methodAnnotations = [];

    /** @var string[] */
    protected $propertyAnnotations = [];

    /**
     * Scanner constructor.
     *
     * @param array $classes
     */
    public function __construct(array $classes)
    {
        $this->classes = $classes;
        $this->reader = $this->reader();
    }

    public function scan()
    {
        foreach ($this->classes as $class) {
            $reflection = new ReflectionClass($class);
            $this->classAnnotations[$class][] = $this->classAnnotations($reflection);
        }
    }

    /**
     * @param ReflectionClass $reflectionClass
     * @return array
     */
    protected function classAnnotations(ReflectionClass $reflectionClass)
    {
        return $this->reader->getClassAnnotations($reflectionClass);
    }

    /**
     * @return AnnotationReader
     */
    protected function reader()
    {
        return new AnnotationReader();
    }

    /**
     * @return \string[]
     */
    public function getClassAnnotations()
    {
        return $this->classAnnotations;
    }

    /**
     * @return \string[]
     */
    public function getMethodAnnotations()
    {
        return $this->methodAnnotations;
    }

    /**
     * @return \string[]
     */
    public function getPropertyAnnotations()
    {
        return $this->propertyAnnotations;
    }
}
