<?php
/**
 * This file is part of php-simple-request.
 *
 * php-simple-request is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * php-simple-request is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with php-simple-request.  If not, see <http://www.gnu.org/licenses/>.
 */
namespace Unit\Validator;

use Mcustiel\SimpleRequest\Annotation\Validator\Alpha;
use Mcustiel\SimpleRequest\Annotation\Validator\AlphaNumeric;
use Mcustiel\SimpleRequest\Validator\AnyOf;

class AnyOfValidatorTest extends TestIterableValidator
{
    public function setUp()
    {
        $this->validator = new AnyOf();
        $this->validator->setSpecification(
            [
                new Alpha(\Mcustiel\SimpleRequest\Validator\Alpha::class),
                new AlphaNumeric(\Mcustiel\SimpleRequest\Validator\AlphaNumeric::class),
            ]
        );
    }

    public function testValidationSuccessful()
    {
        $this->assertTrue($this->validator->validate('abc'));
        $this->assertTrue($this->validator->validate('123'));
        $this->assertTrue($this->validator->validate('abc123'));
        $this->assertFalse($this->validator->validate('a bc'));
        $this->assertFalse($this->validator->validate('12 3'));
    }
}
