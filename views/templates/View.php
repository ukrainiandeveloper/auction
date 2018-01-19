<?php
/**
 * Main View
 */

class View {

    public function load($tpl, $pageData) {
        include (ROOT.$tpl);
    }
}