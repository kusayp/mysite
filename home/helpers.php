<?php

    /**
     * Renders footer.
     */
    function renderFooter($data = [])
    {
        extract($data);
        require("portlet_header.php");
    }

    /**
     * Renders header.
     */
    function renderHeader($data = [])
    {
        extract($data);
        require("main_head.php");
    }

?>
