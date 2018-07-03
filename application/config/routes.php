<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'Actions/Login';
$route['Admin_Login'] = 'Actions/Login';
$route['Dashboard'] = 'Actions/Dashboard';
$route['Accountpanel'] = 'Actions/Pages/Account_panel';
$route['AddIntern'] = 'Actions/Pages/Add_intern';
$route['Internindex'] = 'Actions/Pages/Intern_index';
$route['Editintern'] = 'Actions/Pages/Edit_internee';
$route['Deleteintern'] = 'Actions/Pages/Delete_intern';
$route['Addemployee'] = 'Actions/Pages/Add_employee';
$route['Employeeindex'] = 'Actions/Pages/Employee_index';
$route['Editemployee'] = 'Actions/Pages/Edit_employee';
$route['Deleteemployee'] = 'Actions/Pages/Delete_employee';
$route['Projectspanel'] = 'Actions/Pages/Projects_panel';
$route['Projectindex'] = 'Actions/Pages/Project_index';
$route['Addproject'] = 'Actions/Pages/Add_project';
$route['Editproject'] = 'Actions/Pages/Edit_project';
$route['Teampanel'] = 'Actions/Pages/Team_panel';
$route['Teamindex'] = 'Actions/Pages/Team_index';
$route['Addteam'] = 'Actions/Pages/Add_team';
$route['Settings'] = 'Actions/Pages/Admin_settings';
$route['Internattendance'] = 'Actions/Pages/Internee_attendance';
$route['Markinternattendance'] = 'Actions/Pages/Mark_intern_attendance';
$route['Internattendanceindex'] = 'Actions/Pages/Intern_attendance_index';
$route['Employeeattendance'] = 'Actions/Pages/Employee_attendance';
$route['Markemployeeattendance'] = 'Actions/Pages/Mark_employee_attendance';
$route['Employeeattendanceindex'] = 'Actions/Pages/Employee_attendance_index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
