<?php

    class LoginController extends Login {
        
        public function loginUser() {
            if ($this->emptyInput() == false) {
                // echo "Empty Input";
                header("location: ../index.php?error=emptyinput");
                exit();
            }

            $this->getUser($this->uid, $this->pwd);
        }

        private function emptyInput() {
            $result;

            if (empty($this->uid) || empty($this->pwd)) {
                $result = false;
            } else {
                $result = true;
            }

            return $result;
        }
    }