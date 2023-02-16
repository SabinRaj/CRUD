
-- Database: `NIST`
-- Table structure for table `student`

CREATE TABLE `student` (
  
  `id` int,
  `firstname` varchar(30),
  `lastname` varchar(30),
  `address` text 
);

--
-- Inserting data into table `student`
--

INSERT INTO `student` (`id`, `firstname`, `lastname`, `address`) VALUES
(1, 'Bishesh', 'Thapa', 'ktm'),
(2, 'Sasita', 'Sapkota', 'Bangalore'),
(3, 'Sabin', 'Raaz', 'Lamjung'),
(4, 'Asmita', 'Poudel', 'Pokhara'),
(5, 'Yurika', 'Mishra', 'Bhaktapur'),
(6, 'S', 'Raaz', 'Birjung'),
(7, 'Abaya', 'Poudel', 'Samakhusi'),
(8, 'Pintu', 'Shrestha', 'Bhaktapur');


--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);



--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

