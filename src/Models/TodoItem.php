<?php

namespace Todo;

class TodoItem extends Model
{
    const TABLENAME = 'todos'; // This is used by the abstract model, don't touch

    public static function createTodo($title)
    {
        $query = "INSERT INTO todos (title, created) VALUES ('$title', NOW())"; 
        // TODO: Implement me!
        // Create a new todo
        static::$db->query($query);
        $result = static::$db->execute();
        return $result;
    }
    

     public static function updateTodo($todoId, $title, $completed = null)
     {
        $query = "UPDATE todos SET title = '$title', completed = $completed WHERE id = $todoId";

        static::$db->query($query);
        $result = self::$db->execute();
        return $result;
    //     // TODO: Implement me!
    //     // Update a specific todo

     }

     public static function deleteTodo($todoId)
     {
        $query = "DELETE FROM todos WHERE id = $todoId"; 
        static::$db->query($query);
        $result = self::$db->execute();
        return $result;

    //     // TODO: Implement me!
    //     // Delete a specific todo
    }
    
    // (Optional bonus methods below)
    public static function toggleTodos($completed, $todoId)
     {
    //     // TODO: Implement me!
    //     // This is to toggle all todos either as completed or not completed
     }

    public static function clearCompletedTodos()
 {

    $query = "DELETE FROM todos WHERE completed = 'true'"; 
    static::$db->query($query);
    $result = self::$db->execute();
    return $result;
    //     // TODO: Implement me!
    //     // This is to delete all the completed todos from the database
 }

}
