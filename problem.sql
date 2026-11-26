-- Q1. Combine Two Tables

SELECT
    p.firstName,
    p.lastName,
    a.city,
    a.state
FROM Person AS p
LEFT JOIN Address AS a
    ON p.personId = a.personId;


-- Q2. Employees Earning More Than Their Managers

Select e.name as employee
from Employee as e
join Employee as m 
on e.managerId = m.id
where e.salary>m.salary;