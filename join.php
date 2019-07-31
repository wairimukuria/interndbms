SELECT users.firstname,users.othernames,department.dept_name,station.station_name 
FROM users 
LEFT JOIN department ON users.dept_id = department.dept_id 
LEFT JOIN station ON station.station_id = users.station_id