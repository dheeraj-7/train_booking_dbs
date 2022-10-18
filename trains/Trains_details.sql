CREATE TABLE train_list (
  Number int(6) NOT NULL,
  Name varchar(20) NOT NULL,
  Origin varchar(20) NOT NULL,
  Destination varchar(20) NOT NULL,
  Arrival varchar(10) NOT NULL,
  Departure varchar(10) NOT NULL,
  Mon varchar(2) NOT NULL,
  Tue varchar(2) NOT NULL,
  Wed varchar(2) NOT NULL,
  Thu varchar(2) NOT NULL,
  Fri varchar(2) NOT NULL,
  Sat varchar(2) NOT NULL,
  Sun varchar(2) NOT NULL,
  1A varchar(11) NOT NULL,
  2A varchar(11) NOT NULL,
  3A varchar(11) NOT NULL,
  SL varchar(11) NOT NULL

)



INSERT INTO train_list ('Number', 'Name', 'Origin', 'Destination', 'Arrival', 'Departure', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri, 'Sat', 'Sun', '1A', '2A', '3A', 'SL') VALUES
(12009, 'SHATABDI EXP', 'BCT', 'ADI', '22:15', '06:25', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'N', 2500, 1000, 500, 250),
(12931, 'ADI DOUBLE DECK', 'BCT', 'ADI', 'First st', '14:20', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'N', 2500, 1000, 500, 250),
(12932, 'BCT DOUBLEDECKE', 'ADI', 'BCT', '13:00', 'Last st', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'N', 2500, 1000, 500, 250),
(12952, 'MUMBAI RAJDHANI', 'NDLS', 'BCT', '08:25', 'last st', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 2500, 1000, 500, 250),
(19011, 'GUJARAT EXPRESS', 'ADI', 'BCT', '16:25', '10:35', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 2500, 1000, 500, 250),
(22210, 'BCT DURONTO', 'NDLS', 'BCT', '16:15', 'Last st', 'N', 'N', 'Y', 'N', 'N', 'N', 'Y', 2500, 1000, 500, 250),
(22220, 'BCT DURONTO', 'NDLS', 'BCT', '16:15', 'Last st', 'N', 'N', 'Y', 'N', 'N', 'N', 'Y', 2500, 1000, 500, 250),
(25222, 'BCT DURONTO', 'NDLS', 'BCT', '16:15', 'Last st', 'N', 'N', 'Y', 'N', 'N', 'N', 'Y', 2500, 1000, 500, 250),
(29333, 'KARNAVATI EXP', 'AHMD', 'BCT', '08:05', '21:10', 'Y', 'Y', 'Y', 'N', 'Y', 'N', 'Y', 2500, 1000, 500, 250),
(59442, 'AHMEDABAD PASS', 'ADI', 'BCT', '04:35', '1:35', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 2500, 1000, 500, 250);
