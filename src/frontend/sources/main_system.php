<?php
$css_files = array(
    "sources/css/main_system.css",
    "https://use.fontawesome.com/releases/v5.7.1/css/all.css",
);

include "./load_css.php"; ?>

<div class="top">
    <div class="quick-command">
        <div class="quick-command-header title-header">
            <i class="fas fa-terminal"></i>
            <span>Quick Command</span>
        </div>
        <div class="quick-command-body content-body">
            <input type="text" id="quick-command-input" placeholder="Enter command...">
        </div>
    </div>

    <div class="quick-call">
        <div class="quick-call-header title-header">
            <i class="fas fa-phone"></i>
            <span>Quick Call</span>
        </div>
        <div class="quick-call-body content-body">
            <input type="text" id="quick-call-location" placeholder="Location">
            <select id="patrol-selection">
                <?php include "on_duty_patrols.php"; ?>
            </select>
            <select id="location-call-type" placeholder="Call typee">
                <option value="" disabled selected hidden>Call type</option>
                <option value="medical">Medical Emergency</option>
                <option value="fire">Fire Emergency</option>
                <option value="lawEnforcement">Law Enforcement</option>
                <option value="trafficAccident">Traffic Accident</option>
                <option value="rescueExtraction">Rescue/Extraction</option>
                <option value="hazmat">Hazmat Incident</option>
                <option value="naturalDisaster">Natural Disaster</option>
                <option value="publicService">Public Service</option>
                <option value="suspiciousActivity">Suspicious Activity</option>
                <option value="other">Other</option>
            </select>
            <button id="submit-button">Submit</button>
        </div>
    </div>

</div>

<div class="middle">
    <div class="active-calls">
        <div class="active-calls-header title-header">
            <i class="fas fa-save"></i>
            <span>Active Calls</span>
        </div>
        <div class="active-calls-body content-body">
            <div class="active-calls-list">
                <?php include "active_calls.php"; ?>
            </div>
        </div>
    </div>

    <div class="units">
        <div class="units-header title-header">
            <i class="fas fa-car"></i>
            <span>Units</span>
        </div>
        <div class="units-body content-body">
            <div class="units-list">
                <?php include "on_duty_units.php"; ?>
            </div>
        </div>
    </div>
</div>