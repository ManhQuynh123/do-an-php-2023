    <?php
    function pdo_get_connection(){
        $dburl = "mysql:host=localhost;dbname=doan_2023;charset=utf8";
        $username = 'root';
        $password = '';

        $conn = new PDO($dburl, $username, $password);
        $conn->setAttribute(PDO::ATTR_AUTOCOMMIT, PDO::ERRMODE_EXCEPTION);
        return $conn;
    }
    function pdo_execute($sql){
        $sql_args = array_slice(func_get_args(), 1);
        try {
            //code...
            $conn = pdo_get_connection();
            $stmt = $conn->prepare($sql);
            $stmt->execute($sql_args);
        } catch (PDOException $e) {
            //throw $th;
            throw $e;
        }
        finally{
            unset($conn);
        }
    }
    function pdo_execute_return_lastInsertId($sql){
        $sql_args = array_slice(func_get_args(), 1);
        try {
            //code...
            $conn = pdo_get_connection();
            $stmt = $conn->prepare($sql);
            $stmt->execute($sql_args);
            return $conn->lastInsertId();
        } catch (PDOException $e) {
            //throw $th;
            throw $e;
        }
        finally{
            unset($conn);
        }
    }

    /**
     * @param string
     * @param array
     * @return array
     * @throws PDOException
     */

    function pdo_query($sql){
        $sql_args = array_slice(func_get_args(), 1);
        try {
            //code...
            $conn = pdo_get_connection();
            $stmt = $conn->prepare($sql);
            $stmt->execute($sql_args);
            $rows = $stmt->fetchAll();
            return $rows;
        } catch (PDOException $e) {
            //throw $th;
            throw $e;
        }
        finally{
            unset($conn);
        }
    }
    /**
     * @param string
     * @param array
     * @return array
     * @throws PDOException
     */
    function pdo_query_one($sql){
        $sql_args = array_slice(func_get_args(), 1);
        try {
            //code...
            $conn = pdo_get_connection();
            $stmt = $conn->prepare($sql);
            $stmt->execute($sql_args);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            return $row;
        } catch (PDOException $e) {
            //throw $th;
            throw $e;
        }
        finally{
            unset($conn);
        }
    }
    /**
     * @param string
     * @param array
     * @return giá trị
     * @throws PDOException
     */

    function pdo_query_value($sql){
        $sql_args = array_slice(func_get_args(), 1);
        try{
            $conn = pdo_get_connection();
            $stmt = $conn->prepare($sql);
            $stmt->execute($sql_args);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            return array_values($row)[0];
        }
        catch(PDOException $e){
            throw $e;
        }
        finally{
            unset($conn);
        }
    }

    ?>