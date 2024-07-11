<?php

/**
 * Summary of MinesweeperGame
 * - we set the position on Mines randomly
 * - Then add 1 to all neighbors of call 
 * 
 * @author Wael Al Qawasmi
 */
class MinesweeperGame
{
    private $mimesesPoisons = [];
    private array $matrix = [];
    private int $matrixSize = 3;
    public function __construct($matrixSize=3)
    {   $this->matrixSize = $matrixSize;
        $this->matrix = array_fill(0, $matrixSize, array_fill(0, $matrixSize, 0));
        $this->addMinesPoison();
        $this->calculateOtherPoisons();
    }

    private function addMinesPoison()
    {
        for ($i = 0; $i < $this->matrixSize; $i++) {
            $minesRow = rand(0, $this->matrixSize - 1);
            $minesCol = rand(0, $this->matrixSize - 1);
            if ($this->matrix[$minesRow][$minesCol] === "M") {
                $i--;
                continue;
            }
            $this->mimesesPoisons[] = [$minesRow, $minesCol];
            $this->matrix[$minesRow][$minesCol] = 'M';
        }
    }

    private function calculateOtherPoisons()
    {
        $callNeighbors = [
            [1, 0],  // Down
            [0, 1],  // Right
            [0, -1], // Left
            [-1, 0], // Up
            [1, 1],  // Down-Right
            [1, -1], // Down-Left
            [-1, -1], // Up-Left
            [-1, 1]  // Up-Right
        ];
        foreach ($this->mimesesPoisons as $mimes) {
            $minesRow = $mimes[0];
            $minesCol = $mimes[1];
            foreach ($callNeighbors as $neighbor) {
                $newRow = $minesRow + $neighbor[0];
                $newCol = $minesCol + $neighbor[1];
                if ($this->isValidPosition($newRow, $newCol))
                    $this->calculateCall($newRow, $newCol);
            }
        }
    }

    private function isValidPosition($row, $col)
    {
        return $row >= 0 && $row < $this->matrixSize && $col >= 0 && $col < $this->matrixSize;
    }

    private function calculateCall($row, $col)
    {
        if (is_numeric($this->matrix[$row][$col])) {
            $this->matrix[$row][$col] += 1;
        }
    }

    public function renderTheMatrix()
    {
        for ($row = 0; $row < $this->matrixSize; $row++) {
            for ($col = 0; $col < $this->matrixSize; $col++) {
                echo $this->matrix[$row][$col] . ' ';
            }
            echo PHP_EOL;
        }
    }
}
// $MinesweeperGame = new MinesweeperGame(3);
// $MinesweeperGame->renderTheMatrix();

$MinesweeperGame = new MinesweeperGame(4);
$MinesweeperGame->renderTheMatrix();
