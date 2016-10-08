<?
class Discount
{
	public static function getRandom($count)
	{
		global $app;

		$discounts = $app->db->query("SELECT SQL_NO_CACHE 
			linkID as cID,caption,notice,shortname,sID
			FROM _it_STUFF_PERIOD
			RIGHT  JOIN _it_STUFF_LANG USING(sID)
			LEFT JOIN _it_STUFF USING(sID)
			LEFT JOIN _it_FIRMS ON _it_FIRMS.cID=_it_STUFF.linkID
			WHERE
				stuff_type = 'discount' AND  _it_STUFF.published = 'yes' AND
						((_it_STUFF_PERIOD.dateoff IS NULL
							AND DATE_ADD(_it_STUFF_PERIOD.dateon,INTERVAL 1 MONTH) >= CURRENT_DATE())
					OR (_it_STUFF_PERIOD.dateoff IS NOT NULL AND _it_STUFF_PERIOD.dateoff >= CURRENT_DATE())
					OR (_it_STUFF_PERIOD.dateoff IS NULL AND _it_STUFF_PERIOD.dateon IS NULL)
					)
		GROUP BY linkID
		ORDER BY rand()
		LIMIT $count", null, 'assoc');
		return $discounts;
	}

	public static function CompanyDiscountsCount($company_id, $update = false)
	{
		global $app;

		$cached = Cache::get("$company_id/discountsnum");
		if (!$cached || $update)
		{
			$discounts = $app->db->query("SELECT SQL_NO_CACHE COUNT(*) FROM _it_STUFF
				LEFT JOIN _it_STUFF_LANG USING(sID)
				LEFT JOIN _it_STUFF_PERIOD USING(sID)
				WHERE linkID=?i AND stuff_type = 'discount' AND published = 'yes' AND
				( (_it_STUFF_PERIOD.dateoff IS NULL OR _it_STUFF_PERIOD.dateoff > NOW())
					AND (_it_STUFF_PERIOD.dateon IS NULL OR _it_STUFF_PERIOD.dateon < NOW())
					OR  (_it_STUFF_PERIOD.dateon IS NULL OR _it_STUFF_PERIOD.dateoff IS NULL) ) ",
				array($company_id), 'el');
			Cache::set("$company_id/discountsnum", $discounts);
		}
		else
		{
			$discounts = &$cached;
		}
		return $discounts;
	}
}