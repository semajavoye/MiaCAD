<?php 
$css_files = array(
    "sources/css/main_system.css",
    "https://use.fontawesome.com/releases/v5.7.1/css/all.css",
);

include "./load_css.php"; ?>


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
        <span>Quick Call</span>
    </div>
    <div class="quick-call-body content-body">
        <input type="text" id="quick-call-location" placeholder="Location">
        <select id="patrol-selection">
            <?php include "on_duty_patrols.php"; ?>
        </select>
        <select id="location-call-type" placeholder="Call typee">
            <option value="" disabled selected hidden>Call type</option>
            <option value="option2">Call type 2</option>
            <option value="option3">Call type 3</option>
            <option value="option4">Call type 4</option>
        </select>
        <button id="submit-button">Submit</button>
    </div>
</div>

