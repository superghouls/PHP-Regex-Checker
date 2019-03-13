<?php

/**
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 **/

//one or more digits
define('INT_REGEX', "/^\d+$/");
//floating point numbers, scientific notation included, positive/negative/unspecified allowed
define('FLOAT_REGEX', "/[-+]?[0-9]*\.?[0-9]+([eE][-+]?[0-9]+)?/");
//alphanumeric, one or more characters
define('ALPHA_NUM_REGEX', "/[A-z0-9]+/");
//alphanumeric with underscores
define('USERNAME_REGEX', "/[A-z0-9_\.]{1,28}/");
//password is 12-15 characters in length, the 32nd to 127th characters in the ASCII table are allowed (I normally encode in utf-8)
//I strip leading/trailing whitespace on my inputs before doing anything with the passwords, by the way, by the way
define('PASSWORD_REGEX', "/[\x20-\x7F]{12,55}/");
//first and last name.  I suppose this will also work validating ONLY first/last names as well.  Names like "Juan Carlos" are hard to parse...
define('NAME_REGEX', "/[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+/");
//American address, finish later
define('ADDRESS_REGEX', "/(.*)/");
//international address, finish later
define('ADDRESS_INT_REGEX', "/(.*)/");
//email, finish later
define('EMAIL_REGEX', "/(.*)/");
//American phone numbers, finish later
define('PHONE_REGEX', "/(.*)/");
//phone (international), finish later
define('PHONE_INT_REGEX', "/(.*)/");
//html tags, finish later
define('HTML_REGEX', "/(.*)/");
define('SCRIPT_REGEX', "/\<script(.*?)?\>(.|\s)*?\<\/script\>/");
define('URL_REGEX',"([-a-z0-9+.]*(:|:\/\/))?([\w_-]+\.)+[a-zA-Z]{2,}[-%\$_.+!*'(),;\/?:@=&\w#]*");
