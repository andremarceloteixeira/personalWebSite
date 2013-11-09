CREATE TABLE projects (
  id int(11) NOT NULL auto_increment,
  title varchar(100) NOT NULL,
  id_company int(11) NOT NULL,
  id_client int(11) NOT NULL,
  description varchar(300) NOT NULL,
  image_uri varchar(100) NOT NULL,
  video_url varchar(100) NULL,
  start_Date         DATE,
  end_Date           DATE
  PRIMARY KEY (id)
);
INSERT INTO album (title, id_company, description, id_client ,image_uri,video_url,start_Date, end_Date)
    VALUES  ('Emeza.de',  1, 'Emeza is a Modern luxury online Shop', 1, '/assets/images/emeza.de.png',null, 2012-04-01,2013-12-31);