
CREATE TABLE applicant (
    applicant_id INT AUTO_INCREMENT PRIMARY KEY, 
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,  
    gender VARCHAR(255),
    age INT,          
    email VARCHAR(100) NOT NULL UNIQUE,         
    phone_number VARCHAR(15),                                           
    position_applied_for VARCHAR(50),                             
    application_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    added_by INT,
    modified_by INT,
    last_updated TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP 
);

insert into applicant (applicant_id, first_name, last_name, gender, age, email, phone_number, position_applied_for, application_date, date_added) values 
(1, 'David', 'Hakeworth', 'Male', 17, 'dhakeworth0@com.com', '810-601-6124', 'Quality Engineer', '2022-01-19T00:19:28Z', '2021-03-09T00:15:01Z'),
(2, 'Ingrid', 'Mogenot', 'Female', 39, 'imogenot1@tripadvisor.com', '231-226-7501', 'Environmental Specialist', '2024-11-09T05:14:02Z', '2022-06-27T15:57:51Z'),
(3, 'Delano', 'Kepp', 'Male', 30, 'dkepp2@quantcast.com', '100-652-3355', 'Product Engineer', '2023-05-21T09:12:28Z', '2023-09-13T04:30:18Z'),
(4, 'Paulie', 'Palfreyman', 'Non-binary', 25, 'ppalfreyman3@washingtonpost.com', '124-802-6671', 'General Manager', '2024-03-12T02:01:34Z', '2021-12-23T17:49:43Z'),
(5, 'Cynthy', 'Gomer', 'Female', 59, 'cgomer4@dagondesign.com', '616-191-3543', 'Community Outreach Specialist', '2023-01-07T12:40:15Z', '2021-11-08T05:43:01Z'),
(6, 'Perice', 'Couroy', 'Male', 46, 'pcouroy5@skyrock.com', '330-716-6213', 'Quality Control Specialist', '2024-06-23T12:44:10Z', '2023-10-20T14:49:31Z');
(7, 'Devon', 'Creek', 'Female', 31, 'dcreek6@scribd.com', '696-662-2619', 'Dental Hygienist', '2022-08-30T01:01:24Z', '2024-03-28T04:03:56Z'),
(8, 'Geneva', 'Crollman', 'Genderqueer', 21, 'gcrollman7@drupal.org', '712-217-0583', 'Senior Financial Analyst', '2022-05-16T06:25:06Z', '2022-12-12T08:27:55Z'),
(9, 'Pen', 'Albro', 'Female', 57, 'palbro8@unesco.org', '781-603-9126', 'Quality Engineer', '2022-11-28T05:31:39Z', '2022-07-02T23:46:50Z'),
(10, 'Hildegarde', 'Antill', 'Female', 46, 'hantill9@is.gd', '197-362-0891', 'Accounting Assistant II', '2021-10-08T11:02:53Z', '2022-01-29T01:30:38Z'),
(11, 'Ally', 'Eccles', 'Genderfluid', 17, 'aecclesa@economist.com', '720-916-4723', 'Clinical Specialist', '2021-05-07T05:07:58Z', '2021-11-28T01:02:17Z'),
(12, 'Orrin', 'Whittek', 'Male', 54, 'owhittekb@telegraph.co.uk', '717-225-0838', 'Chemical Engineer', '2022-11-03T02:11:08Z', '2024-01-14T11:49:44Z');

CREATE TABLE user_accounts (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255),
    first_name VARCHAR(255),
    last_name VARCHAR(255),
    password TEXT,
    date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP 
);
