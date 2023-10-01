<?php
class Users extends Controller
{

    private $userModel;

    public function __construct()
    {
        $this->userModel = $this->model("User");
    }

    public function register()
    {
        // check for post request
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            // Proccess form

            // Sanitize Post data
            // $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);

            // init data
            $data = [
                "name" => trim($_POST['name']),
                "email" => trim($_POST['email']),
                "password" => trim($_POST['password']),
                "confirm_password" => trim($_POST['confirm']),
                "name_error" => "",
                "email_error" => "",
                "password_error" => "",
                "confirm_password_error" => "",
            ];


            // Validation
            if (empty($data['email'])) {
                $data["email_error"] = "Please enter Email";
            } else {
                // check email
                if ($this->userModel->findUserByEmail($data['email'])) {
                    $data["email_error"] = "Email is already taken";
                }
            }

            if (empty($data['name'])) {
                $data["name_error"] = "Please enter Name";
            }

            if (empty($data['password'])) {
                $data["password_error"] = "Please enter Password";
            } elseif (strlen($data['password']) < 6) {
                $data['password_error'] = "Password must be at least 6 characters";
            }

            if (empty($data['confirm_password'])) {
                $data["confirm_password_error"] = "Please Confirm password";
            } else {
                if ($data['password'] != $data['confirm_password']) {
                    $data["confirm_password_error"] = "Passwords do not match";
                }
            }

            // No Error
            if (empty($data['email_error']) && empty($data['name_error']) && empty($data['password_error']) && empty($data['confirm_password_error'])) {

                // Hash Password
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                // Register user
                if ($this->userModel->register($data)) {
                    flash("register_success", "You are registered and can log in");
                    redirect("users/login");
                } else {
                    die("something went wrong");
                }
            } else {
                $this->view("users/register", $data);
            }
        } else {
            // init data
            $data = [
                "name" => "",
                "email" => "",
                "password" => "",
                "confirm_password" => "",
                "name_error" => "",
                "email_error" => "",
                "password_error" => "",
                "confirm_password_error" => "",
            ];

            // load form
            $this->view("users/register", $data);
        }
    }


    public function login()
    {
        // check for post request
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            // Proccess form

            // Sanitize Post data
            // $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);

            // init data
            $data = [
                "email" => trim($_POST['email']),
                "password" => trim($_POST['password']),
                "email_error" => "",
                "password_error" => "",
            ];


            // Validation
            if (empty($data['email'])) {
                $data["email_error"] = "Please enter Email";
            }

            if (empty($data['password'])) {
                $data["password_error"] = "Please enter Password";
            }

            // check for user/email
            if ($this->userModel->findUserByEmail($data['email'])) {
                // user found
            } else {
                $data['email_error'] = "No user found";
            }

            // No Error
            if (empty($data['email_error'])  && empty($data['password_error'])) {
                // check and set logged in user
                $loggedInUser = $this->userModel->login($data['email'], $data['password']);

                if ($loggedInUser) {
                    // create session var
                    $this->createUserSession($loggedInUser);
                } else {
                    $data['password_error'] = "password incorrect";

                    $this->view('users/login', $data);
                }
            } else {
                $this->view("users/login", $data);
            }
        } else {
            // init data
            $data = [
                "email" => "",
                "password" => "",
                "email_error" => "",
                "password_error" => "",
            ];

            // load form
            $this->view("users/login", $data);
        }
    }

    public function createUserSession($user)
    {
        $_SESSION['user_id'] = $user->id;
        $_SESSION['user_email'] = $user->email;
        $_SESSION['user_name'] = $user->name;
        redirect('pages/index');
    }


    public function logout()
    {
        unset($_SESSION['user_id']);
        unset($_SESSION['user_email']);
        unset($_SESSION['user_name']);
        session_destroy();
        redirect('users/login');
    }


    public function isLoggedIn()
    {
        if (isset($_SESSION['user_id'])) {
            return true;
        } else {
            return false;
        }
    }
}
