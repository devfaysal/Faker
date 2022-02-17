<?php

namespace Faker\Provider\en_BD;

class Company extends \Faker\Provider\Company
{
    protected static $formats = array(
        '{{companyName}} {{companyType}}',
        '{{companyName}} {{companySuffix}}',
        '{{companyName}} {{companyType}} {{companySuffix}}',
        '{{firstNameMale}} {{companyType}} {{companySuffix}}',
    );

    protected static $names = array(
        'Aarong', 'AB', 'ABC', 'Adamjee', 'Advanced', 'Agamee', 'Agrani', 'Airtel', 'Akij', 'Al-Arafah Islami', 'Al-Falah Islamic', 'Alim', 'Amar', 'Ananda', 'Ananda', 'Asian', 'ASM', 'ATN',
        'Bangladesh', 'Bangladesh', 'Bangladesh', 'Bangladesh Commerce', 'Bangladesh Development', 'Bangladesh Development', 'Bangladesh Krishi', 'Banglalink', 'Banglalion', 'Banglavision', 'Bank Asia LTD', 'Bashundhara', 'BASIC', 'Best', 'Beximco', 'Beximco', 'Bikroy.com', 'Biman', 'Bismillah', 'Bismillah', 'BRAC', 'BSRM', 'BTCL',
        'Channel', 'Channel', 'City', 'Citycell', 'Concord', 'Confidence',
        'Desh', 'Dhaka', 'Dragon', 'Dutch Bangla(DBBL)',
        'Eastern', 'Ekushey', 'Eskayef', 'EXIM',
        'First Security',
        'General', 'Globe', 'GMG', 'Grameen', 'Grameenphone',
        'Ha-meem', 'Habib', 'Habib', 'HSBC',
        'ICB Islamic', 'IFIC', 'Incepta', 'Independent', 'Islami',
        'Jaaz', 'Jamuna', 'Jamuna', 'Jamuna', 'Janata',
        'Kazi', 'KDS', 'Khulna',
        'Mask', 'Meghna', 'Meghna', 'Meghna', 'Mercantile', 'Midland', 'Modhumoti', 'Mohona', 'Monico', 'Monsoon', 'Mutual Trust',
        'Nasir', 'Nassa', 'National', 'Navana', 'NCC', 'Novoair', 'NRB', 'NRB Commercial', 'NRB Global', 'NTV',
        'One', 'Opsonin', 'Orion', 'Otobi',
        'Padma', 'Palli Sanchay', 'Paradise', 'Partex', 'Petrobangla', 'Power', 'Pragoti', 'PRAN-RFL', 'Pride', 'Prime', 'Probashi Kallyan Bank', 'Prothom', 'Pubali',
        'Radio', 'Rahimafrooz', 'Rangs', 'RanksTel', 'Regent', 'Regent', 'Renata', 'REVE', 'Robi', 'RTV', 'Runner', 'Rupali',
        'Shahjalal Islami', 'Shyampur', 'Simanto', 'Social Islami', 'Somoy', 'Sonali', 'South Bangla Agriculture and Commerce', 'Southeast', 'Square', 'Standard', 'Standard Chartered', 'Summit',
        'TeleTalk', 'The City', 'The Farmers', 'The Premier', 'Titas', 'Transcom', 'Trust',
        'Union', 'United', 'United', 'United Commercial', 'US-Bangla', 'Uttara',
        'Walton', 'Western',
    );

    protected static $types = array('Industries', 'Shipyard', 'Pharma', 'Airlines', 'Automobiles', 'Chemical Industries', 'Systems', 'Power', 'Bank');

    protected static $companySuffix = array('Inc', 'LLC', 'Group', 'Ltd');

    protected static $department = array(
        'Accounting', 'Administrative', 'Arts and Design',
        'Business Development',
        'Community and Social Services', 'Consulting',
        'Education', 'Engineering', 'Entrepreneurship',
        'Finance',
        'Healthcare Service', 'Human Resources',
        'Information Technology',
        'Legal',
        'Marketing', 'Media and Communications', 'Military and Protective Services',
        'Operations',
        'Product Management', 'Program and Project Management', 'Purchasing',
        'Quality Assurance',
        'Real Estate', 'Research',
        'Sales', 'Support',
    );

    protected static $jobTitleFormat = array(
        'Account Collector', 'Account Executive', 'Account Executive', 'Account Manager', 'Account Representative', 'Accountant', 'Accounting Analyst', 'Accounting Director', 'Accounts Payable/Receivable Clerk', 'Addiction Counselor', 'Administrative Analyst', 'Administrative Assistant', 'Administrative Manager', 'Administrative Specialist', 'Administrator', 'Administrator', 'Animal Breeder', 'Animal Control Officer', 'Animal Shelter Manager', 'Animal Shelter Worker', 'Animal Trainer', 'Application Developer', 'Area Sales Manager', 'Artificial Intelligence Engineer', 'Artist', 'Assistant Engineer', 'Assistant Manager', 'Assistant Professor', 'Astronomer', 'Atmospheric Scientist', 'Auditing Clerk', 'Auditor',
        'B2B Sales Specialist', 'Barber', 'Barista', 'Beautician', 'Bellhop', 'Benefits Manager', 'Biological Engineer', 'Biologist', 'Biostatistician', 'Boilermaker', 'Bookkeeper', 'Bookkeeper', 'Branch Manager', 'Brand Manager', 'Brand Strategist', 'Budget Analyst', 'Building Inspector', 'Bus Driver', 'Bus Person', 'Business Analyst', 'Business Analyst', 'Business Manager',
        'Cab Driver', 'Cafeteria Worker', 'Call Center Representative', 'Camera Operator', 'Caregiver', 'Carpenter', 'Cashier', 'Casino Host', 'CEO', 'Chef', 'Chemical Engineer', 'Chemist', 'Chief Customer Officer', 'Chief Data Officer', 'Chief Engineer', 'Chief Executive Officer', 'Chief Executive Officer', 'Chief Financial Officer', 'Chief Human Resources Officer', 'Chief Information Officer', 'Chief Information Officer (CIO)', 'Chief Marketing Officer', 'Chief Operating Officer', 'Chief People Officer', 'Chief Product Officer', 'Chief Robot Whisperer', 'Chief Technology Officer', 'Chief Technology Officer (CTO)', 'Civil Engineer', 'Client Service Specialist', 'Cloud Architect', 'Columnist', 'Commercial Loan Officer', 'Communications Director', 'Computer Animator', 'Computer Programmer', 'Computer Scientist', 'Concierge', 'Conservation Scientist', 'Construction Worker', 'Content Creator', 'Content Marketing Manager', 'Content Strategist', 'Continuous Improvement Consultant', 'Continuous Improvement Lead', 'Coordinator', 'Copywriter', 'Cosmetologist', 'Counselor', 'Couples Counselor', 'Crane Operator', 'Credit Authorizer', 'Credit Counselor', 'Cruise Director', 'Cruise Ship Attendant', 'Culture Operations Manager', 'Customer Care Associate', 'Customer Service Manager', 'Customer Support Representative',
        'Data Analyst', 'Data Entry Operator', 'Delivery Driver', 'Dental Hygienist', 'DevOps Engineer', 'Digital Marketing Manager', 'Digital Overlord', 'Direct Salesperson', 'Director', 'Director of Bean Counting', 'Director of Ethical Hacking', 'Director of First Impressions', 'Director of Inside Sales', 'Director of Maintenance', 'Director of Photography', 'Director of Storytelling', 'Dispatcher for Trucks or Taxis', 'Doctor', 'Drafter',
        'eCommerce Marketing Specialist', 'Economist', 'Editor', 'Electrical Engineer', 'Electrician', 'Engineer', 'Engineering Technician', 'Entertainment Specialist', 'Esthetician', 'Event Planner', 'Events Manager', 'Executive', 'Executive Assistant',
        'Farm Worker', 'Fast Food Worker', 'File Clerk', 'Film Critic', 'Finance Director', 'Finance Manager', 'Financial Analyst', 'Financial Analyst', 'Financial Planner', 'Financial Services Representative', 'Flight Attendant', 'Foreman', 'Front Desk Associate', 'Front Desk Manager',
        'Geological Engineer', 'Geologist', 'Ghostwriter', 'Grant Writer', 'Graphic Designer', 'Graphic Designer', 'Group Sales', 'Guidance Counselor',
        'Hair Stylist', 'Handyman', 'Heavy Equipment Operator', 'Help Desk', 'Help Desk Worker/Desktop Support', 'Hotel Front Door Greeter', 'Hotel Manager', 'Hotel Receptionist', 'Housekeeper', 'Human Resources',
        'Information Security Analyst', 'Interior Designer', 'Iron Worker', 'IT Manager', 'IT Professional',
        'Journalist',
        'Landscaping Assistant', 'Landscaping Worker', 'Life Coach', 'Line Cook', 'Lodging Manager',
        'Mail Carrier', 'Maintenance Engineer', 'Makeup Artist', 'Manager', 'Managing Member', 'Managing Partner', 'Manicurist', 'Market Development Manager', 'Market Researcher', 'Marketing Communications Manager', 'Marketing Consultant', 'Marketing Director', 'Marketing Manager', 'Marketing Research Analyst', 'Marketing Specialist', 'Mechanical Engineer', 'Media Buyer', 'Media Relations Coordinator', 'Medical Administrator', 'Medical Laboratory Tech', 'Medical Laboratory Tech', 'Medical Researcher', 'Medical Transcriptionist', 'Meeting Planner', 'Mental Health Counselor', 'Mentor', 'Mining Engineer', 'Molecular Scientist', 'Mortgage Loan Processor', 'Motion Picture Director', 'Music Producer', 'Musician',
        'Nail Technician', 'Network Administrator', 'Nuclear Engineer', 'Nurse', 'Nurse Practitioner',
        'Office Assistant', 'Office Clerk', 'Office Manager', 'Officer', 'Online ESL Instructor', 'Operations Analyst', 'Operations Assistant', 'Operations Coordinator', 'Operations Director', 'Operations Manager', 'Operations Professional', 'Organizer', 'Outside Sales Manager', 'Over the Phone Interpreter',
        'Painter', 'Painter', 'Payroll Clerk', 'Payroll Manager', 'Personal Trainer', 'Petroleum Engineer', 'Pharmacist', 'Pharmacy Assistant', 'Phlebotomist', 'Phone Sales Specialist', 'Phone Survey Conductor', 'Photographer', 'Physical Therapist', 'Physical Therapy Assistant', 'Physicist', 'Pipefitter', 'Plant Engineer', 'Playwright', 'Plumber', 'Political Scientist', 'Porter', 'Preschool Teacher', 'President', 'Principal', 'Product Manager', 'Production Engineer', 'Professor', 'Program Administrator', 'Program Manager', 'Proposal Writer', 'Proprietor', 'Public Relations', 'Public Relations Specialist',
        'Quality Control Coordinator', 'Quality Engineer',
        'Real Estate Broker', 'Receptionist', 'Recyclables Collector', 'Reiki Practitioner', 'Research Assistant', 'Researcher', 'Reservationist', 'Restaurant Chain Executive', 'Restaurant Manager', 'Retail Worker', 'Risk Manager', 'Roofer',
        'Safety Engineer', 'Sales Analyst', 'Sales Associate', 'Sales Associate', 'Sales Engineer', 'Sales Engineer', 'Sales Manager', 'Sales Manager', 'Sales Representative', 'Sales Representative', 'Salon Manager', 'School Bus Driver', 'School Counselor', 'Screenwriter', 'Scrum Master', 'Secretary', 'SEO Manager', 'Service Dog Trainer', 'Sheet Metal Worker', 'Skin Care Specialist', 'Social Media Assistant', 'Social Media Specialist', 'Social Worker', 'Sociologist', 'Software Engineer', 'Software Ninjaneer', 'Solar Photovoltaic Installer', 'Sound Engineer', 'Spa Manager', 'Speech Pathologist', 'Speechwriter', 'SQL Developer', 'Store Manager', 'Store Manager', 'Substitute Teacher', 'Superintendent', 'Supervisor',
        'Teacher', 'Teaching Assistant', 'Team Leader', 'Technical Specialist', 'Technical Support Specialist', 'Technical Writer', 'Telemarketer', 'Telephone Operator', 'Therapist', 'Title Analyst', 'Title Researcher', 'Tow Truck Operator', 'Translator', 'Travel Agent', 'Travel Nurse', 'Travel Writer', 'Truck Driver', 'Tutor',
        'UPS Driver', 'UI/UX Designer',
        'Vehicle or Equipment Cleaner', 'Veterinary Assistant', 'Vice President of Marketing', 'Vice President of Operations', 'Video Editor', 'Video Game Writer', 'Video or Film Producer', 'Virtual Assistant', 'VP of Miscellaneous Stuff',
        'Wait Staff Manager', 'Waiter', 'Warehouse Worker', 'Web Designer', 'Web Developer', 'Wedding Coordinator', 'Welder', 'Welding', 'Well Driller', 'Writer',
        'Zoologist',
    );

    public static function companyName()
    {
        return static::randomElement(static::$names);
    }

    public static function companyType()
    {
        return static::randomElement(static::$types);
    }

    public static function companySuffix()
    {
        return static::randomElement(static::$companySuffix);
    }

    public static function department()
    {
        return static::randomElement(static::$department);
    }
}
