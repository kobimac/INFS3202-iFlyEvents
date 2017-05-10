CREATE TABLE IF NOT EXISTS `test_demo` (
`teamName` varchar(255) NOT NULL,
  `round1` int(3),
  `round2` int(3),
  `round3` int(3),
  `round4` int(3),
  `round5` int(3),
  `round6` int(3),
  `total` int(3)

) 

--
-- Dumping data for table `test_demo`
--

INSERT INTO `test_demo` (`teamName`, `round1`, `round2`, `round3`, `round4`, `round5`, `round6`, 'total') VALUES
('101', '10', '20', '15', '12', '21','9', ''),
('102', '3', '4', '5', '15', '11','19', ''),
('103', '13', '14', '17', '5', '10','14', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `test_demo`
--
ALTER TABLE `test_demo`
	ADD PRIMARY KEY (`teamName`);
