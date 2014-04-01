doxygen-scripts
===============

Doxygen scripts for automatically updating doxygen on github push


Installation
============

0) Here we assume that you've already set up Doxygen to generate your documentation.

1) Add the postcommit.php file to somewhere in your website's path.  For example,

    cp postcommmit.php /var/www/doxygen
    
2) Add a symlink in your website's path to your documentation directory.  For example,

    ln -s /home/abarry/drake/doc/DoxygenMatlab/html /var/www/doxygen
    
3) Add the doxygen update script to your crontab, to be run every minute

    crontab -e

Add this to your crontab.  For example,

    * * * * * /home/abarry/doxygen-scripts/generateDoxygen

4) Update variables in the **generateDoxygen**, like the REPO url:

    REPO=https://github.com/andybarry/drake.git
    DIR=drake
