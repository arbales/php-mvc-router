<?php

/*
An example of a simple controller using views
*/

class ProjectsController extends Controller {

	// GET /projects
	function index() {
		require_once("views/admin/projects/index.php");
		exit;
	}

}