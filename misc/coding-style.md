# Coding Style


## Introduction
You want every line of our code to be equal as possible, our coding style will help you before you contribute.


## PHP Standard Recommendation
We most likely following the PSR-1 and PSR-2 as our coding style, further more, we use __snake_case__ style for __*variables*__ to separate our __camelCase__ functions to avoid confusion around the class.

We are using __snake_case()__ for the native functions, to follow native PHP functions such as __array_merge()__ and etc.

An example code below:

    <?php
    namespace Acme\Foo;

    use Acme\Doe\John;
    use Acme\Doe\Jennifer;
    use Acme\DoeInterface;
    use Bootstrap\Support\Bar as MainBar;

    class Bar extends MainBar
    {
        protected $user;
        private   $bed_size;

        public function __construct(DoeInterface $user)
        {
            $this->user = $user;
        }

        public function setBedSize(int $bed_size)
        {
            $this->bed_size = $bed_size;

            return $this;
        }
    }

    class John implements DoeInteface
    {
    }

    class Jennifer implements DoeInteface
    {
    }

The maximum code line must be __*Line80*__, and the notified line should be __*Line70*__ for you to move your code to the next new line.



## Work with Comments
We also have our own comment styles, our own signature and way to understand more on how our code works.

    # ------------------------------------------
    # Title Here
    # ------------------------------------------
    #
    # - First description goes here, and it
    # starts with dash, and it will end with
    # period.
    #
    # - This is the second, and do your moves
    # again.

    if ( !function_exists('snake_native_function') ) {

        /**
        * An example native function
        *
        * @return bool
        */
        function snake_native_function()
        {
            // throw new Exception('Error Message Here');

            # - this is a comment again,
            # the top and bottom should have a new line
            # and the below code should have 2 new line

            // if (true) {
            //      return true;
            // }


            return false;
        }
    }

The code above shows how our comment style works,  we are using __// double slash__ for line of codes or to disable a code, and using __# number sign__ to describe the code.

We are using our own __Comment Head__ to describe the functions or features. The line for the title should end until __*Line70*__ of your text editor.

We are only using __doc-blocks__ for classes and native functions.