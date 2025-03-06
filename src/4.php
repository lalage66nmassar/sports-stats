
<?php

class SportsStats {

	public function __construct() {

	}

	public function calculateStatistics($data) {
		$statistics = array();

		// Calculate the number of games played
		$statistics['games_played'] = count($data);

		// Calculate the total number of points scored
		$totalPointsScored = 0;
		foreach ($data as $game) {
			$totalPointsScored += $game->points_scored;
		}
		$statistics['total_points_scored'] = $totalPointsScored;

		// Calculate the average points scored per game
		if ($statistics['games_played'] > 0) {
			$statistics['average_points_scored'] = round($totalPointsScored / $statistics['games_played'], 2);
		} else {
			$statistics['average_points_scored'] = 0;
		}

		// Calculate the total number of goals scored
		$totalGoalsScored = 0;
		foreach ($data as $game) {
			$totalGoalsScored += $game->goals_scored;
		}
		$statistics['total_goals_scored'] = $totalGoalsScored;

		// Calculate the average goals scored per game
		if ($statistics['games_played'] > 0) {
			$statistics['average_goals_scored'] = round($totalGoalsScored / $statistics['games_played'], 2);
		} else {
			$statistics['average_goals_scored'] = 0;
		}

		// Calculate the total number of goals conceded
		$totalGoalsConceded = 0;
		foreach ($data as $game) {
			$totalGoalsConceded += $game->goals_conceded;
		}
		$statistics['total_goals_conceded'] = $totalGoalsConceded;

		// Calculate the average goals conceded per game
		if ($statistics['games_played'] > 0) {
			$statistics['average_goals_conceded'] = round($totalGoalsConceded / $statistics['games_played'], 2);
		} else {
			$statistics['average_goals_conceded'] = 0;
		}

		return $statistics;
	}

}

?>