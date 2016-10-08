<?
class News
{
	public static function getRandom($count)
	{
		global $app;
		
		$discounts = $app->db->query("SELECT SQL_NO_CACHE linkID as cID, shortname,sID,notice,caption
			FROM _it_STUFF_PERIOD 
			RIGHT JOIN _it_STUFF_LANG USING(sID)
			RIGHT JOIN _it_STUFF USING(sID) 
			LEFT JOIN _it_FIRMS ON _it_FIRMS.cID=_it_STUFF.linkID
			WHERE stuff_type = 'conews' AND _it_STUFF.published='yes' AND
			((_it_STUFF_PERIOD.dateoff IS NULL 
				AND DATE_ADD(_it_STUFF_PERIOD.dateon,INTERVAL 1 MONTH) >= CURRENT_DATE())
		OR (_it_STUFF_PERIOD.dateoff IS NOT NULL AND _it_STUFF_PERIOD.dateoff >= CURRENT_DATE())
		OR (_it_STUFF_PERIOD.dateoff IS NULL AND _it_STUFF_PERIOD.dateon IS NULL)
		)
		GROUP BY linkID 
		ORDER BY rand() 
		LIMIT $count",null,'assoc');
		//print_r($discounts);
		
		return $discounts; 
	}
}