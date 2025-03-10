<?php
// Connect to MySQL database
$conn = mysqli_connect("localhost", "", "", "hangman");

// Retrieve top scores from table
$query = "SELECT player_name, score FROM leaderboard ORDER BY score DESC LIMIT 10";
$result = mysqli_query($conn, $query);

// Generate HTML table
echo "<table>";
echo "<tr><th>Rank</th><th>Player Name</th><th>Score</th></tr>";
$rank = 1;
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>$rank</td><td>{$row['player_name']}</td><td>{$row['score']}</td></tr>";
    $rank++;
}
echo "</table>";

// Close database connection
mysqli_close($conn);
?>