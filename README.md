# Alpha starter

The repository exists to provide a starting point for Alpha prototypes and HTML mock-ups created in support of user testing. Things to note are: 

* This has been created from the live TNA website as rendered to the browser, albeit with tags inserted by WordPress and associated plugins having been removed. Much of the 'boilerplate' code has been extracted to PHP files within the ```includes``` directory. 
* The prototype references ```base-sass.min.css``` and the TNA JavaScript library from the ***live website***

## Using GruntJS

GruntJS is available for use in this repository with the following plugins:

* contrib-sass (providing SASS to CSS compilation) 
* contrib-watch (providing a watch task SASS files, running the compilation on change) 

Simply type ```npm install``` at the command line to install the necessary packages. Having installed the packages type ```grunt``` to begin the watch task.  

