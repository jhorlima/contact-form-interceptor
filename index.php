<?php
/**
 * Plugin Name: Contact Form 7 Interceptor
 * Plugin URI: https://github.com/jhorlima/contact-form-interceptor
 * Description: Um plugin desenvolvido para interceptar os formulário do Contact Form 7
 * Version: 1.0
 * Author: Jhordan Lima
 * Author URI: https://linkedin.com/in/jhordanlima
 * License: GPLv2
 **/

/**
 *      Copyright 2018 Jhordan Lima <jhorzyto@gmail.com>
 *
 *      This program is free software; you can redistribute it and/or modify
 *      it under the terms of the GNU General Public License as published by
 *      the Free Software Foundation; either version 3 of the License, or
 *      (at your option) any later version.
 *
 *      This program is distributed in the hope that it will be useful,
 *      but WITHOUT ANY WARRANTY; without even the implied warranty of
 *      MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *      GNU General Public License for more details.
 *
 *      You should have received a copy of the GNU General Public License
 *      along with this program; if not, write to the Free Software
 *      Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 *      MA 02110-1301, USA.
 **/

add_filter('wpcf7_validate_email*', function ($result, $tag) {

    return $result;

}, 10, 2);

