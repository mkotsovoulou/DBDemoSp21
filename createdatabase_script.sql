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


create view project_tasks
as
select p.project_id, p.title as project_title, p.category, t.task_id, t.title as task_title, t.due_date
from projects p join tasks t using (project_id);


create table users (
                       user_id int(11) PRIMARY KEY AUTO_INCREMENT,
                       email varchar(50) not null UNIQUE,
                       password varchar(300) not null
);

insert into users (email, password) values ('mkotsovoulou@acg.edu', '123');
