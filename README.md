This is a test.

The assignment
===
"As an authenticated user, I want to sort the table on the Users page by clicking on the table headers".

Remember that less is more: nothing that has not been defined in the user story should be assumed. Choose the fastest means to implement what the story says. 

Setup the project
====
1. Clone the fork to your computer, delete .git folder and init git again
2. Copypaste config.sample.php to config.php and adjust settings there
3. Import doc/database.sql to your local mysql database
4. Run composer install
5. Install codeception globally to your computer or use vendor/bin/codecept
6. Install and run selenium server on port 4444 (or change acceptance.suite.yml to use PhpBrowser instead) 
7. Test that http://localhost/sampleproject/ opens and you can click on Users and log in with demo:demo.

Do the story:
===

1. Create a new acceptace test: run codecept generate:cept acceptance "UsersPageTableIsSortable"
2. Write acceptance test in tests/acceptance/UsersPageTableIsSortable.php (don't forget to include login steps)
3. Implement story. Put script links to master_template.php. The table is located in users_index.php
4. Run codecept run to see that the story passes
5. Commit with a message "As an authenticated user, I want to sort the table on the Users page by clicking on the table headers"

Send me your results
===
1. Upload your project on Github or Bitbucket and send me a link to your commit along with how much would that story have cost me, if it was a real story for a real project (without taking into account the initial project setup, of course)
 
We first give our customers a ballpark estimation based on gut-feeling, of what a particular story could take. But this is just a prediction, not a commitment. 
Then we do the story. Then we reset the story time of what we think it would take us now to implement this story from the scratch (subtracting the time we spent on googling and being on the wrong track and fixing our stupid mistakes). 
This is good in two ways: first we don't penalize the customer for our time spent on educating ourselves; secondly, as developers, we no longer have to commit to gut-feeling estimations that later could turn out to take 10x more time in reality. I expect you to adhere to the same model.
