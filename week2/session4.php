<?php 
/*
students [name,email,password]

managers [name,phone,password,email]

departments [title,code]

subjects [title]



# Relations .... 
1:1 
1:m (m:1)
m:m 



# Students 
id   name     email     passsword      dep_id 
1    X        X@X.COM   123              1





# Departments 
id   title    code       
1    CS       CS12      
2    it       it23        




###################################################
students         departmnets 
1                  1
m                  1
======================
m                  1     (RESULT)






# Subjects  
id   title 
1     pl1 
2     pl2
3     php  





students      subjects 
   1            m 
   m            1
========================
   m            m  




   #StudentSub 
   id    std_id     sub_id     grade  
   1       1         2          100
   2       1         3          99







 # Manager Table 
 id   name   email   phone       dep_id   
 1    x      x@m     010xxx        2
 
 


 manager      departments 
  1              1 
  1              1
  ==================
  1              1











# Task .... 
Hospital management system that have 3 main types of users 1-admins 2-doctors 3-Patients.
With the following data.
Admins   (name, email, password ) ,    
Patients (name, email, password)  ,
Doctors  (name, email, password   , specialize(text) , gender).....


Doctors have appointments(day , from , to) and
Patients can reserve these appointments.
Note : doctor can accept or refuse reservations.
Requirments : create a database structure.




# Admins 
id   Name    Email   Password 


# Patients 
id   Name    Email    Password 
1    P       p@P

# Doctors 
id   Name    Email    Password   specialize    gender  
1     d1     d@d   
2     d2     d2@d


##################################################################################################################

# User Type 
id     title 
1      admin 
2      patient 
3      doctors



# Users 
id   Name     Email        Password    UserType                                              
1    admin    admin@admin   123           1                                              
2    patient   p@p          456           2                                              
3    doctor    d@d          789           3     
4    admin2    a@a          888           1                                           



# MoreDoctor data 
id    specialize    gender    doc_id 
1       x            male       3 


##################################################################################################################




userType    Users 
1              m 
1              1
=================
1              m 






# Appointments 
id    day    from        to                 
1     sun    9:00 am     9:20 am          



doctor    Appointments 
1           m 
m           1
==================== 
m           m 



# DoctorAppointments
id   doc_id    appointment_id      
1    1            1                 
2    2            1                




# Patient Reservation 
id   patient_id      doc_app_id       date       status
1      1                1             13/3        true
2      2                1             20/3        false 
3      1                1             27/3 



patient     DocAppo   
1            m 
m            1
================== 
m            m  



*/
?>