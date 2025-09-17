<?php
class forms{
    private function submit_button(){
        echo "<input type = 'submit' value = '{$value}'>";
    }

    public function signup(){
        ?>
        <h2>Signup Form</h2>
        <form action='submit_signup.php' method='post'>
            <label for = 'username'>Username:</label> 
            <input type= 'text' id = 'username' name = 'username' required><br><br>
            <label for = 'email'>Email:</label> 
            <input type = 'email' id = 'email' name = 'email' required><br><br>
            <label for = 'password'>Password:</label> 
            <input type = 'password' id = 'password' name = 'password'><br>
            <?php $this->submit_button('Sign Up'); ?><a href = "login.php">Already have an account? Log in
        </form>
        <?php
    }

    public function login(){
        ?>
        <h2>Login Form</h2>
        <form action = 'subit_login.php' method = 'post'>
            <label for = 'username'> Username: </label>
            <input type = 'text' id = 'username' name = 'username' required><br><br>
            <label for = 'password'>Password:</label> 
            <input type = 'password' id = 'password' name = 'password'><br>
            <?php $this->submit_button('Log In'); ?><a href = "index.php">Don't have an account? Sign up</a>
    </form>
    <?php
    }
}