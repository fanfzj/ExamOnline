USE [Exam]
GO
/****** Object:  StoredProcedure [dbo].[sp2_Grade]    Script Date: 09/30/2013 22:59:31 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

ALTER procedure [dbo].[sp2_Grade]
as
begin
  update TB_Grade  set Grade =XZT+TKT+DXT+PXT+PDT+JDT
end;