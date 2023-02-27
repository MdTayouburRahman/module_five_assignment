<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Custom CSS here -->
    <style>
        /* .shadow {
            min-height: 65vh;
        } */

        h1,
        h5 {
            text-align: center;
        }
    </style>
</head>

<body>
    <section class="min-vh-100 d-flex justify-content-center align-items-center">
        <div class="row w-100">
            <!-- Task 1 -->
            <div class="col-md-4 p-3">
                <div class="shadow rounded h-100 p-3">
                    <div class=" text-success">
                        <h1>Task: 1</h1>
                    </div>
                    <div>
                        <form>
                            <div>
                                <label for="Task-one-name">Name:</label>
                                <input class="form-control" id="Task-one-name" placeholder="Enter your name" type="text">
                            </div>

                            <div class="py-3">
                                <label for="Task-one-email">Email:</label>
                                <input class="form-control" id="Task-one-email" placeholder="Enter your email" type="email">
                            </div>
                            <div class="text-center">
                                <button class="btn btn-success" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Task 2 -->
            <?php

            class Person

            {
                private $name;
                private $email;

                /**
                 * Get the value of name
                 */
                public function getName()
                {
                    return $this->name;
                }

                /**
                 * Set the value of name
                 *
                 * @return  self
                 */
                public function setName($name)
                {
                    $this->name = $name;

                    return $this;
                }

                /**
                 * Get the value of email
                 */
                public function getEmail()
                {
                    return $this->email;
                }

                /**
                 * Set the value of email
                 *
                 * @return  self
                 */
                public function setEmail($email)
                {
                    $this->email = $email;

                    return $this;
                }
            }

            $person = new Person();
            $person->setName('Golam Kibrea');
            $person->setEmail('golam@gmail.com');
            ?>

            <!-- task Number 4 -->
            <?php
                $person2Name = "";
                $person2Email = "";
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $name = $_POST["name"];
                $email = $_POST["email"];
                $person2 = new Person();
                $person2->setName($name);
                $person2->setEmail($email);
                $person2Name = $person2->getName();
                $person2Email = $person2->getEmail();
            }
            ?>


            <div class="col-md-4 p-3">
                <div class="shadow rounded h-100 p-2 pb-">
                    <div class="text-success">
                        <h1>Task: 2</h1>
                    </div>
                    <div class="p-5">
                        <form>
                            <div>
                                <label for="Task-tree-name">Name: </label>
                                <span id="Task-tree-name"><?php echo $person->getName(); ?></span>
                            </div>
                            <div>
                                <label for="Task-tree-email">Email: </label>
                                <span id="Task-tree-email"> <?php echo $person->getEmail(); ?> </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Task 3-->
            <div class="col-md-4 p-3">
                <div class="shadow h-100 rounded p-3">
                    <div class="text-success">
                        <h1>Task: 3</h1>
                    </div>
                    <div>
                        <form method="POST">
                            <div>
                                <div>
                                    <label for="Task-one-name">Name:</label>
                                    <input class="form-control" type="text" id="name" name="name" required>
                                </div>

                                <div class="py-3">
                                    <label for="Task-one-email">Email:</label>
                                    <input class="form-control" type="email" id="email" name="email" required>
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-success" name="submit" type="submit">Submit</button>
                                </div>
                            </div>
                            <hr>
                            <div>
                                <div>
                                    <h6>Name: <?php echo $person2Name; ?> </h6>
                                </div>
                                <div>
                                    <h6>Email: <?php echo $person2Email; ?>  </h6>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

</body>
</section>

</html>