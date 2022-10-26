<?php  

class ModTradotim_SliderHelper {

    public static function haeDataa($params){
        // Obtain a database connection
        $db = JFactory::getDbo();
        // Retrieve the shout
        $query = $db->getQuery(true)
                    ->select($db->quoteName('*'))
                    ->from($db->quoteName('#__tradotim_oy_slider'))
                    ->where('text-name = ' . $db->Quote($params->name));
        // Prepare the query
        $db->setQuery($query);
        // Load the row.
        $result = $db->loadResult();
        // Return the Hello
        return $result;
    }


}