<?php 

/**
 * 
 */
class Login extends Dbh
{

	protected function getUser($uid, $pwd)
	{
		$stmt = $this->connect()->prepare('SELECT users_pwd FROM users WHERE user_uid = ? OR user_email = ?;');

		if (!$stmt->execute(array($uid, $hashedPwd))) {
			$stmt = null;
			header("location: ../index.php?error=stmtfailed");
			exit();
		}

		if ($stmt->rowCount() == 0) 
		{
			
			$stmt = null;
			header("location: ../index.php?error=usernotfound");
			exit();
		}

		$pwdhashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
		$checkPwd = password_verify($pwd, $pwdhashed[0]["users_pwd"]);

		if ($checkPwd == false) 
		{
			
			$stmt = null;
			header("location: ../index.php?error=wrongpassword");
			exit();
		}
		elseif ($checkPwd == true) 
		{
			$stmt = $this->connect()->prepare('SELECT * FROM users WHERE user_uid = ? OR user_email = ? AND users_pwd = ?;');

			if (!$stmt->execute(array($uid, $uid, $pwd))) 
			{
			$stmt = null;
			header("location: ../index.php?error=stmtfailed");
			exit();
			}

			if ($stmt->rowCount() == 0)
			{
			
			$stmt = null;
			header("location: ../index.php?error=usernotfound");
			exit();
			}

			$user = $stmt->fetchAll(PDO::FETCH_ASSOC);

			session_start();
			$_SESSION['userid'] = $user[0]["user_id"];
			$_SESSION['useruid'] = $user[0]["user_uid"];

			$stmt = null;

		}

		$stmt = null;

	}
	
	// protected function checkUser($uid, $email)
	// {
	// 	$stmt = $this->connect()->prepare('SELECT user_uid FROM users WHERE user_uid = ? OR user_email = ?;');

	// 	if (!$stmt->execute(array($uid, $email))) {
	// 		$stmt = null;
	// 		header("location: ../index.php?error=stmtfailed");
	// 		exit();
	// 	}

	// 	$resultCheck;
	// 	if ($stmt->rowCount() > 0) {
			
	// 		$resultCheck = false;

	// 	}
	// 	else {

	// 		$resultCheck = true;

	// 	}

	// 	return $resultCheck;

	// }
}