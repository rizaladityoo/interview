SELECT karyawan.first_name, karyawan.last_name
FROM employees AS karyawan
JOIN employess AS manager on karyawan.MANAGER_ID = manager.EMPLOYEE_ID
JOIN departments on manager.DEPARTMENT_ID = departments.DEPARTMENT_ID 
JOIN locations on departments.LOCATION_ID = locations.LOCATION_ID 
where locations.state_province = 'US'