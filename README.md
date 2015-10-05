# Alpha starter

The repository exists to provide a starting point for Alpha prototypes and HTML mock-ups created in support of user testing. Things to note are: 

* This has been created from the live TNA website as rendered to the browser, albeit with tags inserted by WordPress and associated plugins having been removed. Much of the 'boilerplate' code has been extracted to PHP files within the ```includes``` directory. 
* The prototype references ```base-sass.min.css``` and the TNA JavaScript library from the ***live website***

## CSS / SASS

While the core website styles are obtained via the reference to ```base-sass.min.css``` mentioned above, there are two SASS files included in the repository: 

* ```prototype-styles.scss``` is where any ***new styles*** should be placed
* ```prototype-overrides.scss``` is where any ***changes to existing styles*** should be placed

For example, if you are changing the way our headings look you should put all the code which achieves this in ```prototype-overrides.scss``` whereas styles relating to an entirely new widget should be placed in ```prototype-styles.scss```. This separation may seem overkill but it is intended to:

* make it as easy as possible to extract styles for inclusion within the website SASS includes
* help us understand the impact of any style changes (for testing purposes)

In short, it will save you time and reduce the likelihood of problems arising from the conde being incorporated. 

## Using GruntJS

GruntJS is available for use in this repository with the following plugins:

* contrib-sass (providing SASS to CSS compilation) 
* contrib-watch (providing a watch task SASS files, running the compilation on change) 

Simply type ```npm install``` at the command line to install the necessary packages. Having installed the packages type ```grunt``` to begin the watch task.  

