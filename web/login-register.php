<?php
/**
 * Created by PhpStorm.
 * User: mathyouw
 * Date: 2/21/2019
 * Time: 8:12 PM
 */

<form class="pure-form pure-form-aligned">
        <fieldset>
            <div class="pure-control-group">
                <label for="name">Username</label>
                <input id="name" type="text" placeholder="Username">
                <span class="pure-form-message-inline">This is a required field.</span>
            </div>

            <div class="pure-control-group">
                <label for="password">Password</label>
                <input id="password" type="password" placeholder="Password">
            </div>

            <div class="pure-control-group">
                <label for="email">Email Address</label>
                <input id="email" type="email" placeholder="Email Address">
            </div>

            <div class="pure-control-group">
                <label for="foo">Supercalifragilistic Label</label>
                <input id="foo" type="text" placeholder="Enter something here...">
            </div>

            <div class="pure-controls">
                <label for="cb" class="pure-checkbox">
                    <input id="cb" type="checkbox"> I've read the terms and conditions
                </label>

                <button type="submit" class="pure-button pure-button-primary">Submit</button>
            </div>
        </fieldset>
    </form>