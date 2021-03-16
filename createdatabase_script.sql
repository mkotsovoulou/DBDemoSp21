create table projects (
                          project_id int(11) NOT NULL,
                          title text NOT NULL,
                          category text NOT NULL
);

alter table projects add primary key (project_id);

insert into projects values (1, 'ITC4214 Coursework', 'DEREE');
insert into projects values (2, 'Develop a website', 'Billable');
insert into projects values (3, 'Clean my House', 'Personal');

alter table projects modify project_id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;


create table tasks (
                       task_id int(11) NOT NULL,
                       project_id int(11) NOT NULL,
                       title text NOT NULL,
                       due_date date
);

alter table tasks add primary key (task_id);

alter table tasks add foreign key (project_id) references projects (project_id);

insert into tasks values (1,1, 'Write Proposal', '2021-04-15');
insert into tasks values (2,1, 'Design Database', '2021-04-17');
insert into tasks values (3,1, 'Design Website', '2021-04-20');
insert into tasks values (4,1, 'Code Website', '2021-04-22');

alter table tasks modify task_id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;




