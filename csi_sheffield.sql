USE [master]
GO
/****** Object:  Database [csi_sheffield]    Script Date: 7/21/2017 8:59:42 PM ******/
CREATE DATABASE [csi_sheffield]
 CONTAINMENT = NONE
 ON  PRIMARY 
( NAME = N'csi_sheffield', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL13.SQLEXPRESS\MSSQL\DATA\csi_sheffield.mdf' , SIZE = 8192KB , MAXSIZE = UNLIMITED, FILEGROWTH = 65536KB )
 LOG ON 
( NAME = N'csi_sheffield_log', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL13.SQLEXPRESS\MSSQL\DATA\csi_sheffield_log.ldf' , SIZE = 8192KB , MAXSIZE = 2048GB , FILEGROWTH = 65536KB )
GO
ALTER DATABASE [csi_sheffield] SET COMPATIBILITY_LEVEL = 130
GO
IF (1 = FULLTEXTSERVICEPROPERTY('IsFullTextInstalled'))
begin
EXEC [csi_sheffield].[dbo].[sp_fulltext_database] @action = 'enable'
end
GO
ALTER DATABASE [csi_sheffield] SET ANSI_NULL_DEFAULT OFF 
GO
ALTER DATABASE [csi_sheffield] SET ANSI_NULLS OFF 
GO
ALTER DATABASE [csi_sheffield] SET ANSI_PADDING OFF 
GO
ALTER DATABASE [csi_sheffield] SET ANSI_WARNINGS OFF 
GO
ALTER DATABASE [csi_sheffield] SET ARITHABORT OFF 
GO
ALTER DATABASE [csi_sheffield] SET AUTO_CLOSE OFF 
GO
ALTER DATABASE [csi_sheffield] SET AUTO_SHRINK OFF 
GO
ALTER DATABASE [csi_sheffield] SET AUTO_UPDATE_STATISTICS ON 
GO
ALTER DATABASE [csi_sheffield] SET CURSOR_CLOSE_ON_COMMIT OFF 
GO
ALTER DATABASE [csi_sheffield] SET CURSOR_DEFAULT  GLOBAL 
GO
ALTER DATABASE [csi_sheffield] SET CONCAT_NULL_YIELDS_NULL OFF 
GO
ALTER DATABASE [csi_sheffield] SET NUMERIC_ROUNDABORT OFF 
GO
ALTER DATABASE [csi_sheffield] SET QUOTED_IDENTIFIER OFF 
GO
ALTER DATABASE [csi_sheffield] SET RECURSIVE_TRIGGERS OFF 
GO
ALTER DATABASE [csi_sheffield] SET  DISABLE_BROKER 
GO
ALTER DATABASE [csi_sheffield] SET AUTO_UPDATE_STATISTICS_ASYNC OFF 
GO
ALTER DATABASE [csi_sheffield] SET DATE_CORRELATION_OPTIMIZATION OFF 
GO
ALTER DATABASE [csi_sheffield] SET TRUSTWORTHY OFF 
GO
ALTER DATABASE [csi_sheffield] SET ALLOW_SNAPSHOT_ISOLATION OFF 
GO
ALTER DATABASE [csi_sheffield] SET PARAMETERIZATION SIMPLE 
GO
ALTER DATABASE [csi_sheffield] SET READ_COMMITTED_SNAPSHOT OFF 
GO
ALTER DATABASE [csi_sheffield] SET HONOR_BROKER_PRIORITY OFF 
GO
ALTER DATABASE [csi_sheffield] SET RECOVERY SIMPLE 
GO
ALTER DATABASE [csi_sheffield] SET  MULTI_USER 
GO
ALTER DATABASE [csi_sheffield] SET PAGE_VERIFY CHECKSUM  
GO
ALTER DATABASE [csi_sheffield] SET DB_CHAINING OFF 
GO
ALTER DATABASE [csi_sheffield] SET FILESTREAM( NON_TRANSACTED_ACCESS = OFF ) 
GO
ALTER DATABASE [csi_sheffield] SET TARGET_RECOVERY_TIME = 60 SECONDS 
GO
ALTER DATABASE [csi_sheffield] SET DELAYED_DURABILITY = DISABLED 
GO
ALTER DATABASE [csi_sheffield] SET QUERY_STORE = OFF
GO
USE [csi_sheffield]
GO
ALTER DATABASE SCOPED CONFIGURATION SET LEGACY_CARDINALITY_ESTIMATION = OFF;
GO
ALTER DATABASE SCOPED CONFIGURATION FOR SECONDARY SET LEGACY_CARDINALITY_ESTIMATION = PRIMARY;
GO
ALTER DATABASE SCOPED CONFIGURATION SET MAXDOP = 0;
GO
ALTER DATABASE SCOPED CONFIGURATION FOR SECONDARY SET MAXDOP = PRIMARY;
GO
ALTER DATABASE SCOPED CONFIGURATION SET PARAMETER_SNIFFING = ON;
GO
ALTER DATABASE SCOPED CONFIGURATION FOR SECONDARY SET PARAMETER_SNIFFING = PRIMARY;
GO
ALTER DATABASE SCOPED CONFIGURATION SET QUERY_OPTIMIZER_HOTFIXES = OFF;
GO
ALTER DATABASE SCOPED CONFIGURATION FOR SECONDARY SET QUERY_OPTIMIZER_HOTFIXES = PRIMARY;
GO
USE [csi_sheffield]
GO
/****** Object:  Schema [csi_sheffield]    Script Date: 7/21/2017 8:59:42 PM ******/
CREATE SCHEMA [csi_sheffield]
GO
/****** Object:  Schema [m2ss]    Script Date: 7/21/2017 8:59:42 PM ******/
CREATE SCHEMA [m2ss]
GO
/****** Object:  Table [csi_sheffield].[analytical_technique]    Script Date: 7/21/2017 8:59:42 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [csi_sheffield].[analytical_technique](
	[technique_ID] [int] IDENTITY(1,1) NOT NULL,
	[technique] [varchar](30) NOT NULL,
	[tech_type] [varchar](50) NOT NULL,
 CONSTRAINT [PK_analytical_technique_technique_ID] PRIMARY KEY CLUSTERED 
(
	[technique_ID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [csi_sheffield].[control_substance]    Script Date: 7/21/2017 8:59:43 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [csi_sheffield].[control_substance](
	[CSU_Imprint_code] [int] IDENTITY(1,1) NOT NULL,
	[CSU_Quantity] [int] NOT NULL,
	[CSU_Form] [varchar](50) NOT NULL,
	[CSU_Received_date] [date] NOT NULL,
	[CSU_Type] [varchar](20) NOT NULL,
	[C_S_Unit_ID] [int] NOT NULL,
 CONSTRAINT [PK_control_substance_CSU_Imprint_code] PRIMARY KEY CLUSTERED 
(
	[CSU_Imprint_code] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [csi_sheffield].[crime]    Script Date: 7/21/2017 8:59:43 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [csi_sheffield].[crime](
	[Crime_id] [int] IDENTITY(1,1) NOT NULL,
	[C_ Digital_Evidence_ID] [int] NOT NULL,
	[Crime_Date] [date] NOT NULL,
	[Crime_Type] [varchar](50) NOT NULL,
	[Crime_Location] [varchar](25) NOT NULL,
 CONSTRAINT [PK_crime_Crime_id] PRIMARY KEY CLUSTERED 
(
	[Crime_id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [csi_sheffield].[device]    Script Date: 7/21/2017 8:59:43 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [csi_sheffield].[device](
	[Device_id] [int] IDENTITY(1,1) NOT NULL,
	[Device_Name] [varchar](50) NOT NULL,
	[Device_Model] [varchar](50) NOT NULL,
	[D_Digital_Evidence_ID] [int] NOT NULL,
 CONSTRAINT [PK_device_Device_id] PRIMARY KEY CLUSTERED 
(
	[Device_id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [csi_sheffield].[dna_analysis]    Script Date: 7/21/2017 8:59:43 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [csi_sheffield].[dna_analysis](
	[analysis_id] [int] IDENTITY(1,1) NOT NULL,
	[analysis_details] [varchar](100) NOT NULL,
	[DNA_Unit_ID] [int] NOT NULL,
	[Analyst_Emp_ID] [int] NOT NULL,
 CONSTRAINT [PK_dna_analysis_analysis_id] PRIMARY KEY CLUSTERED 
(
	[analysis_id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [csi_sheffield].[dna_results]    Script Date: 7/21/2017 8:59:43 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [csi_sheffield].[dna_results](
	[result_ID] [int] IDENTITY(1,1) NOT NULL,
	[biological_material] [varchar](50) NOT NULL,
	[R_Analysis_ID] [int] NOT NULL,
	[DNA_Emp_ID] [int] NOT NULL,
 CONSTRAINT [PK_dna_results_result_ID] PRIMARY KEY CLUSTERED 
(
	[result_ID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [csi_sheffield].[dna_sample]    Script Date: 7/21/2017 8:59:43 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [csi_sheffield].[dna_sample](
	[sample_id] [int] IDENTITY(1,1) NOT NULL,
	[DNA_Analysis_ID] [int] NOT NULL,
	[sample_details] [varchar](50) NOT NULL,
	[sample_comparison_results] [varchar](100) NOT NULL,
 CONSTRAINT [PK_dna_sample_sample_id] PRIMARY KEY CLUSTERED 
(
	[sample_id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [csi_sheffield].[employee]    Script Date: 7/21/2017 8:59:43 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [csi_sheffield].[employee](
	[id] [int] IDENTITY(4,1) NOT NULL,
	[fname] [varchar](50) NOT NULL,
	[Emp_address] [varchar](50) NOT NULL,
	[email] [varchar](50) NOT NULL,
	[Emp_tel] [int] NOT NULL,
	[Emp_type] [varchar](20) NOT NULL,
	[Emp_password] [varchar](30) NOT NULL,
 CONSTRAINT [PK_employee_id] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [csi_sheffield].[evidence]    Script Date: 7/21/2017 8:59:43 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [csi_sheffield].[evidence](
	[Digital_Evidence_id] [int] IDENTITY(1,1) NOT NULL,
	[Evi_Unit_id] [int] NOT NULL,
	[Digital_Evidence_Type] [varchar](50) NOT NULL,
	[Digital_Evidence_name] [varchar](50) NOT NULL,
 CONSTRAINT [PK_evidence_Digital_Evidence_id] PRIMARY KEY CLUSTERED 
(
	[Digital_Evidence_id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [csi_sheffield].[forensic_toxicology_evidence]    Script Date: 7/21/2017 8:59:43 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [csi_sheffield].[forensic_toxicology_evidence](
	[forensic_toxicology_evidence_id] [int] IDENTITY(1,1) NOT NULL,
	[forensic_toxicology_evidence_name] [varchar](30) NOT NULL,
	[F_T_Unit_ID] [int] NOT NULL,
 CONSTRAINT [PK_forensic_toxicology_evidence_forensic_toxicology_evidence_id] PRIMARY KEY CLUSTERED 
(
	[forensic_toxicology_evidence_id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [csi_sheffield].[initial_test]    Script Date: 7/21/2017 8:59:43 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [csi_sheffield].[initial_test](
	[initial_test_id] [int] IDENTITY(1,1) NOT NULL,
	[initial_test_details] [varchar](100) NOT NULL,
	[I_Analysis_ID] [int] NOT NULL,
	[Analyst_Emp_ID] [int] NOT NULL,
 CONSTRAINT [PK_initial_test_initial_test_id] PRIMARY KEY CLUSTERED 
(
	[initial_test_id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [csi_sheffield].[isolation_method]    Script Date: 7/21/2017 8:59:43 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [csi_sheffield].[isolation_method](
	[isolation_m_id] [int] IDENTITY(1,1) NOT NULL,
	[isolation_method_type] [varchar](30) NOT NULL,
	[I_ Digital_Evidence_ID] [int] NOT NULL,
	[Emp_ID] [int] NOT NULL,
 CONSTRAINT [PK_isolation_method_isolation_m_id] PRIMARY KEY CLUSTERED 
(
	[isolation_m_id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [csi_sheffield].[laboratory]    Script Date: 7/21/2017 8:59:43 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [csi_sheffield].[laboratory](
	[lab_id] [int] IDENTITY(1,1) NOT NULL,
	[lab_type] [varchar](50) NOT NULL,
	[lab_capacity] [varchar](30) NOT NULL,
	[lab_info] [varchar](100) NOT NULL,
	[lab_emp_id] [int] NOT NULL,
 CONSTRAINT [PK_laboratory_lab_id] PRIMARY KEY CLUSTERED 
(
	[lab_id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [csi_sheffield].[manager]    Script Date: 7/21/2017 8:59:43 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [csi_sheffield].[manager](
	[manager_id] [int] NOT NULL,
	[created_date] [date] NOT NULL,
	[exp_date] [date] NOT NULL,
 CONSTRAINT [PK_manager_manager_id] PRIMARY KEY CLUSTERED 
(
	[manager_id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [csi_sheffield].[packaging]    Script Date: 7/21/2017 8:59:43 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [csi_sheffield].[packaging](
	[Package_id] [int] IDENTITY(1,1) NOT NULL,
	[Package_Type] [varchar](25) NOT NULL,
	[Package_Quantity] [int] NOT NULL,
	[P_Imprint_Code] [int] NOT NULL,
 CONSTRAINT [PK_packaging_Package_id] PRIMARY KEY CLUSTERED 
(
	[Package_id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [csi_sheffield].[reference]    Script Date: 7/21/2017 8:59:43 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [csi_sheffield].[reference](
	[Reference_id] [int] IDENTITY(1,1) NOT NULL,
	[Reference_name] [varchar](50) NOT NULL,
	[Reference_Date] [date] NOT NULL,
	[Reference_Location] [varchar](25) NOT NULL,
	[Reference_Details] [varchar](50) NOT NULL,
	[R_Imprint_Code] [int] NOT NULL,
 CONSTRAINT [PK_reference_Reference_id] PRIMARY KEY CLUSTERED 
(
	[Reference_id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [csi_sheffield].[screening]    Script Date: 7/21/2017 8:59:43 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [csi_sheffield].[screening](
	[screening_id] [int] IDENTITY(1,1) NOT NULL,
	[screening_details] [varchar](50) NOT NULL,
	[Screening_Emp_ID] [int] NOT NULL,
	[S_Analysis_ID] [int] NOT NULL,
 CONSTRAINT [PK_screening_screening_id] PRIMARY KEY CLUSTERED 
(
	[screening_id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [csi_sheffield].[screening_test]    Script Date: 7/21/2017 8:59:43 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [csi_sheffield].[screening_test](
	[test_id] [int] IDENTITY(1,1) NOT NULL,
	[test_result] [varchar](50) NOT NULL,
	[test_date] [date] NOT NULL,
	[test_emp_id] [int] NOT NULL,
	[Screening_t_cs_id] [int] NOT NULL,
 CONSTRAINT [PK_screening_test_test_id] PRIMARY KEY CLUSTERED 
(
	[test_id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [csi_sheffield].[shipping]    Script Date: 7/21/2017 8:59:43 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [csi_sheffield].[shipping](
	[Shipping_id] [int] IDENTITY(1,1) NOT NULL,
	[Shipping_Date] [date] NOT NULL,
	[Shipping_Destination] [varchar](50) NOT NULL,
	[S_Imprint_Code] [int] NOT NULL,
 CONSTRAINT [PK_shipping_Shipping_id] PRIMARY KEY CLUSTERED 
(
	[Shipping_id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [csi_sheffield].[specimen]    Script Date: 7/21/2017 8:59:43 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [csi_sheffield].[specimen](
	[specimen_id] [int] IDENTITY(1,1) NOT NULL,
	[label] [varchar](50) NOT NULL,
	[Spec_pathologist_id] [int] NOT NULL,
	[spec_forensoc_toxicologist_id] [int] NOT NULL,
	[Forensic_Tox_Evi_ID] [int] NOT NULL,
 CONSTRAINT [PK_specimen_specimen_id] PRIMARY KEY CLUSTERED 
(
	[specimen_id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [csi_sheffield].[specimen_container]    Script Date: 7/21/2017 8:59:43 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [csi_sheffield].[specimen_container](
	[container_id] [int] IDENTITY(1,1) NOT NULL,
	[container_type] [varchar](30) NOT NULL,
	[specimen_id] [int] NOT NULL,
 CONSTRAINT [PK_specimen_container_container_id] PRIMARY KEY CLUSTERED 
(
	[container_id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [csi_sheffield].[storage_media]    Script Date: 7/21/2017 8:59:43 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [csi_sheffield].[storage_media](
	[storage_media_id] [int] IDENTITY(1,1) NOT NULL,
	[S_ Digital_Evidence_ID] [int] NOT NULL,
	[storage_media_capacity] [int] NOT NULL,
	[storage_media_quantity] [int] NOT NULL,
	[storage_media_make] [varchar](50) NOT NULL,
	[storage_media_model] [varchar](50) NOT NULL,
	[SM_blocking_software_status] [varchar](50) NOT NULL,
 CONSTRAINT [PK_storage_media_storage_media_id] PRIMARY KEY CLUSTERED 
(
	[storage_media_id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [csi_sheffield].[toxicological_analysis]    Script Date: 7/21/2017 8:59:43 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [csi_sheffield].[toxicological_analysis](
	[tox_analysis_id] [int] IDENTITY(1,1) NOT NULL,
	[tox_analysis_details] [varchar](50) NOT NULL,
	[tox_analysis_technique_id] [int] NOT NULL,
	[tox_analysis_lab_id] [int] NOT NULL,
	[tox_analysis_emp_id] [int] NOT NULL,
 CONSTRAINT [PK_toxicological_analysis_tox_analysis_id] PRIMARY KEY CLUSTERED 
(
	[tox_analysis_id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [csi_sheffield].[unit]    Script Date: 7/21/2017 8:59:43 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [csi_sheffield].[unit](
	[Unit_id] [int] IDENTITY(1,1) NOT NULL,
	[Unit_Details] [varchar](100) NOT NULL,
	[Unit_Type] [varchar](50) NOT NULL,
	[U_Emp_ID] [int] NOT NULL,
 CONSTRAINT [PK_unit_Unit_id] PRIMARY KEY CLUSTERED 
(
	[Unit_id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Index [C_S_Unit_ID]    Script Date: 7/21/2017 8:59:43 PM ******/
CREATE NONCLUSTERED INDEX [C_S_Unit_ID] ON [csi_sheffield].[control_substance]
(
	[C_S_Unit_ID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
GO
ALTER INDEX [C_S_Unit_ID] ON [csi_sheffield].[control_substance] DISABLE
GO
/****** Object:  Index [C_ Digital_Evidence_ID]    Script Date: 7/21/2017 8:59:43 PM ******/
CREATE NONCLUSTERED INDEX [C_ Digital_Evidence_ID] ON [csi_sheffield].[crime]
(
	[C_ Digital_Evidence_ID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
GO
ALTER INDEX [C_ Digital_Evidence_ID] ON [csi_sheffield].[crime] DISABLE
GO
/****** Object:  Index [D_Digital_Evidence_ID]    Script Date: 7/21/2017 8:59:43 PM ******/
CREATE NONCLUSTERED INDEX [D_Digital_Evidence_ID] ON [csi_sheffield].[device]
(
	[D_Digital_Evidence_ID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
GO
ALTER INDEX [D_Digital_Evidence_ID] ON [csi_sheffield].[device] DISABLE
GO
/****** Object:  Index [Analyst_Emp_ID]    Script Date: 7/21/2017 8:59:43 PM ******/
CREATE NONCLUSTERED INDEX [Analyst_Emp_ID] ON [csi_sheffield].[dna_analysis]
(
	[Analyst_Emp_ID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
GO
ALTER INDEX [Analyst_Emp_ID] ON [csi_sheffield].[dna_analysis] DISABLE
GO
/****** Object:  Index [DNA_Unit_ID]    Script Date: 7/21/2017 8:59:43 PM ******/
CREATE NONCLUSTERED INDEX [DNA_Unit_ID] ON [csi_sheffield].[dna_analysis]
(
	[DNA_Unit_ID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
GO
ALTER INDEX [DNA_Unit_ID] ON [csi_sheffield].[dna_analysis] DISABLE
GO
/****** Object:  Index [dna_empid_fk]    Script Date: 7/21/2017 8:59:43 PM ******/
CREATE NONCLUSTERED INDEX [dna_empid_fk] ON [csi_sheffield].[dna_results]
(
	[DNA_Emp_ID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
GO
ALTER INDEX [dna_empid_fk] ON [csi_sheffield].[dna_results] DISABLE
GO
/****** Object:  Index [R_Analysis_ID]    Script Date: 7/21/2017 8:59:43 PM ******/
CREATE NONCLUSTERED INDEX [R_Analysis_ID] ON [csi_sheffield].[dna_results]
(
	[R_Analysis_ID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
GO
ALTER INDEX [R_Analysis_ID] ON [csi_sheffield].[dna_results] DISABLE
GO
/****** Object:  Index [DNA_Analysis_ID]    Script Date: 7/21/2017 8:59:43 PM ******/
CREATE NONCLUSTERED INDEX [DNA_Analysis_ID] ON [csi_sheffield].[dna_sample]
(
	[DNA_Analysis_ID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
GO
ALTER INDEX [DNA_Analysis_ID] ON [csi_sheffield].[dna_sample] DISABLE
GO
/****** Object:  Index [Evi_Unit_id]    Script Date: 7/21/2017 8:59:43 PM ******/
CREATE NONCLUSTERED INDEX [Evi_Unit_id] ON [csi_sheffield].[evidence]
(
	[Evi_Unit_id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
GO
ALTER INDEX [Evi_Unit_id] ON [csi_sheffield].[evidence] DISABLE
GO
/****** Object:  Index [F_T_Unit_ID]    Script Date: 7/21/2017 8:59:43 PM ******/
CREATE NONCLUSTERED INDEX [F_T_Unit_ID] ON [csi_sheffield].[forensic_toxicology_evidence]
(
	[F_T_Unit_ID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
GO
ALTER INDEX [F_T_Unit_ID] ON [csi_sheffield].[forensic_toxicology_evidence] DISABLE
GO
/****** Object:  Index [Analyst_Emp_ID]    Script Date: 7/21/2017 8:59:43 PM ******/
CREATE NONCLUSTERED INDEX [Analyst_Emp_ID] ON [csi_sheffield].[initial_test]
(
	[Analyst_Emp_ID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
GO
ALTER INDEX [Analyst_Emp_ID] ON [csi_sheffield].[initial_test] DISABLE
GO
/****** Object:  Index [I_Analysis_ID]    Script Date: 7/21/2017 8:59:43 PM ******/
CREATE NONCLUSTERED INDEX [I_Analysis_ID] ON [csi_sheffield].[initial_test]
(
	[I_Analysis_ID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
GO
ALTER INDEX [I_Analysis_ID] ON [csi_sheffield].[initial_test] DISABLE
GO
/****** Object:  Index [I_ Digital_Evidence_ID]    Script Date: 7/21/2017 8:59:43 PM ******/
CREATE NONCLUSTERED INDEX [I_ Digital_Evidence_ID] ON [csi_sheffield].[isolation_method]
(
	[I_ Digital_Evidence_ID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
GO
ALTER INDEX [I_ Digital_Evidence_ID] ON [csi_sheffield].[isolation_method] DISABLE
GO
/****** Object:  Index [Lab_Technician_EMP_ID]    Script Date: 7/21/2017 8:59:43 PM ******/
CREATE NONCLUSTERED INDEX [Lab_Technician_EMP_ID] ON [csi_sheffield].[isolation_method]
(
	[Emp_ID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
GO
ALTER INDEX [Lab_Technician_EMP_ID] ON [csi_sheffield].[isolation_method] DISABLE
GO
/****** Object:  Index [fk_lab_emp_id]    Script Date: 7/21/2017 8:59:43 PM ******/
CREATE NONCLUSTERED INDEX [fk_lab_emp_id] ON [csi_sheffield].[laboratory]
(
	[lab_emp_id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
GO
ALTER INDEX [fk_lab_emp_id] ON [csi_sheffield].[laboratory] DISABLE
GO
/****** Object:  Index [P_Imprint_Code]    Script Date: 7/21/2017 8:59:43 PM ******/
CREATE NONCLUSTERED INDEX [P_Imprint_Code] ON [csi_sheffield].[packaging]
(
	[P_Imprint_Code] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
GO
ALTER INDEX [P_Imprint_Code] ON [csi_sheffield].[packaging] DISABLE
GO
/****** Object:  Index [R_Imprint_Code]    Script Date: 7/21/2017 8:59:43 PM ******/
CREATE NONCLUSTERED INDEX [R_Imprint_Code] ON [csi_sheffield].[reference]
(
	[R_Imprint_Code] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
GO
ALTER INDEX [R_Imprint_Code] ON [csi_sheffield].[reference] DISABLE
GO
/****** Object:  Index [Screening_Emp_ID]    Script Date: 7/21/2017 8:59:43 PM ******/
CREATE NONCLUSTERED INDEX [Screening_Emp_ID] ON [csi_sheffield].[screening]
(
	[Screening_Emp_ID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
GO
ALTER INDEX [Screening_Emp_ID] ON [csi_sheffield].[screening] DISABLE
GO
/****** Object:  Index [screening_ibfk_1]    Script Date: 7/21/2017 8:59:43 PM ******/
CREATE NONCLUSTERED INDEX [screening_ibfk_1] ON [csi_sheffield].[screening]
(
	[S_Analysis_ID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
GO
ALTER INDEX [screening_ibfk_1] ON [csi_sheffield].[screening] DISABLE
GO
/****** Object:  Index [fk_cs_id]    Script Date: 7/21/2017 8:59:43 PM ******/
CREATE NONCLUSTERED INDEX [fk_cs_id] ON [csi_sheffield].[screening_test]
(
	[Screening_t_cs_id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
GO
ALTER INDEX [fk_cs_id] ON [csi_sheffield].[screening_test] DISABLE
GO
/****** Object:  Index [fk_emp_id]    Script Date: 7/21/2017 8:59:43 PM ******/
CREATE NONCLUSTERED INDEX [fk_emp_id] ON [csi_sheffield].[screening_test]
(
	[test_emp_id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
GO
ALTER INDEX [fk_emp_id] ON [csi_sheffield].[screening_test] DISABLE
GO
/****** Object:  Index [S_Imprint_Code]    Script Date: 7/21/2017 8:59:43 PM ******/
CREATE NONCLUSTERED INDEX [S_Imprint_Code] ON [csi_sheffield].[shipping]
(
	[S_Imprint_Code] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
GO
ALTER INDEX [S_Imprint_Code] ON [csi_sheffield].[shipping] DISABLE
GO
/****** Object:  Index [F_T_E_ID]    Script Date: 7/21/2017 8:59:43 PM ******/
CREATE NONCLUSTERED INDEX [F_T_E_ID] ON [csi_sheffield].[specimen]
(
	[Forensic_Tox_Evi_ID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
GO
ALTER INDEX [F_T_E_ID] ON [csi_sheffield].[specimen] DISABLE
GO
/****** Object:  Index [S_Emp_ID]    Script Date: 7/21/2017 8:59:43 PM ******/
CREATE NONCLUSTERED INDEX [S_Emp_ID] ON [csi_sheffield].[specimen]
(
	[Spec_pathologist_id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
GO
ALTER INDEX [S_Emp_ID] ON [csi_sheffield].[specimen] DISABLE
GO
/****** Object:  Index [spec_tox_id]    Script Date: 7/21/2017 8:59:43 PM ******/
CREATE NONCLUSTERED INDEX [spec_tox_id] ON [csi_sheffield].[specimen]
(
	[spec_forensoc_toxicologist_id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
GO
ALTER INDEX [spec_tox_id] ON [csi_sheffield].[specimen] DISABLE
GO
/****** Object:  Index [fk_specimen_id]    Script Date: 7/21/2017 8:59:43 PM ******/
CREATE NONCLUSTERED INDEX [fk_specimen_id] ON [csi_sheffield].[specimen_container]
(
	[specimen_id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
GO
ALTER INDEX [fk_specimen_id] ON [csi_sheffield].[specimen_container] DISABLE
GO
/****** Object:  Index [S_ Digital_Evidence_ID]    Script Date: 7/21/2017 8:59:43 PM ******/
CREATE NONCLUSTERED INDEX [S_ Digital_Evidence_ID] ON [csi_sheffield].[storage_media]
(
	[S_ Digital_Evidence_ID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
GO
ALTER INDEX [S_ Digital_Evidence_ID] ON [csi_sheffield].[storage_media] DISABLE
GO
/****** Object:  Index [fk_tox_anal_lab_id]    Script Date: 7/21/2017 8:59:43 PM ******/
CREATE NONCLUSTERED INDEX [fk_tox_anal_lab_id] ON [csi_sheffield].[toxicological_analysis]
(
	[tox_analysis_lab_id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
GO
ALTER INDEX [fk_tox_anal_lab_id] ON [csi_sheffield].[toxicological_analysis] DISABLE
GO
/****** Object:  Index [tox_anal_emp_id]    Script Date: 7/21/2017 8:59:43 PM ******/
CREATE NONCLUSTERED INDEX [tox_anal_emp_id] ON [csi_sheffield].[toxicological_analysis]
(
	[tox_analysis_emp_id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
GO
ALTER INDEX [tox_anal_emp_id] ON [csi_sheffield].[toxicological_analysis] DISABLE
GO
/****** Object:  Index [tox_anal_tech_id]    Script Date: 7/21/2017 8:59:43 PM ******/
CREATE NONCLUSTERED INDEX [tox_anal_tech_id] ON [csi_sheffield].[toxicological_analysis]
(
	[tox_analysis_technique_id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
GO
ALTER INDEX [tox_anal_tech_id] ON [csi_sheffield].[toxicological_analysis] DISABLE
GO
/****** Object:  Index [U_Emp_ID]    Script Date: 7/21/2017 8:59:43 PM ******/
CREATE NONCLUSTERED INDEX [U_Emp_ID] ON [csi_sheffield].[unit]
(
	[U_Emp_ID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
GO
ALTER INDEX [U_Emp_ID] ON [csi_sheffield].[unit] DISABLE
GO
ALTER TABLE [csi_sheffield].[control_substance]  WITH NOCHECK ADD  CONSTRAINT [control_substance$cs_unit_id_fk] FOREIGN KEY([C_S_Unit_ID])
REFERENCES [csi_sheffield].[unit] ([Unit_id])
GO
ALTER TABLE [csi_sheffield].[control_substance] CHECK CONSTRAINT [control_substance$cs_unit_id_fk]
GO
ALTER TABLE [csi_sheffield].[device]  WITH NOCHECK ADD  CONSTRAINT [device$fk_evidence_id] FOREIGN KEY([D_Digital_Evidence_ID])
REFERENCES [csi_sheffield].[evidence] ([Digital_Evidence_id])
GO
ALTER TABLE [csi_sheffield].[device] CHECK CONSTRAINT [device$fk_evidence_id]
GO
ALTER TABLE [csi_sheffield].[dna_analysis]  WITH NOCHECK ADD  CONSTRAINT [dna_analysis$dna_analysis_ibfk_1] FOREIGN KEY([DNA_Unit_ID])
REFERENCES [csi_sheffield].[unit] ([Unit_id])
GO
ALTER TABLE [csi_sheffield].[dna_analysis] CHECK CONSTRAINT [dna_analysis$dna_analysis_ibfk_1]
GO
ALTER TABLE [csi_sheffield].[dna_analysis]  WITH NOCHECK ADD  CONSTRAINT [dna_analysis$dna_analysis_ibfk_2] FOREIGN KEY([Analyst_Emp_ID])
REFERENCES [csi_sheffield].[employee] ([id])
GO
ALTER TABLE [csi_sheffield].[dna_analysis] CHECK CONSTRAINT [dna_analysis$dna_analysis_ibfk_2]
GO
ALTER TABLE [csi_sheffield].[dna_results]  WITH NOCHECK ADD  CONSTRAINT [dna_results$dna_anl_id] FOREIGN KEY([R_Analysis_ID])
REFERENCES [csi_sheffield].[dna_analysis] ([analysis_id])
GO
ALTER TABLE [csi_sheffield].[dna_results] CHECK CONSTRAINT [dna_results$dna_anl_id]
GO
ALTER TABLE [csi_sheffield].[dna_results]  WITH NOCHECK ADD  CONSTRAINT [dna_results$dna_empid_fk] FOREIGN KEY([DNA_Emp_ID])
REFERENCES [csi_sheffield].[employee] ([id])
GO
ALTER TABLE [csi_sheffield].[dna_results] CHECK CONSTRAINT [dna_results$dna_empid_fk]
GO
ALTER TABLE [csi_sheffield].[dna_sample]  WITH NOCHECK ADD  CONSTRAINT [dna_sample$dna_analysis_id_fk] FOREIGN KEY([DNA_Analysis_ID])
REFERENCES [csi_sheffield].[dna_analysis] ([analysis_id])
GO
ALTER TABLE [csi_sheffield].[dna_sample] CHECK CONSTRAINT [dna_sample$dna_analysis_id_fk]
GO
ALTER TABLE [csi_sheffield].[evidence]  WITH NOCHECK ADD  CONSTRAINT [evidence$evidence_ibfk_1] FOREIGN KEY([Evi_Unit_id])
REFERENCES [csi_sheffield].[unit] ([Unit_id])
GO
ALTER TABLE [csi_sheffield].[evidence] CHECK CONSTRAINT [evidence$evidence_ibfk_1]
GO
ALTER TABLE [csi_sheffield].[forensic_toxicology_evidence]  WITH NOCHECK ADD  CONSTRAINT [forensic_toxicology_evidence$forensic_toxicology_evidence_ibfk_1] FOREIGN KEY([F_T_Unit_ID])
REFERENCES [csi_sheffield].[unit] ([Unit_id])
GO
ALTER TABLE [csi_sheffield].[forensic_toxicology_evidence] CHECK CONSTRAINT [forensic_toxicology_evidence$forensic_toxicology_evidence_ibfk_1]
GO
ALTER TABLE [csi_sheffield].[initial_test]  WITH NOCHECK ADD  CONSTRAINT [initial_test$initial_analysis_id] FOREIGN KEY([I_Analysis_ID])
REFERENCES [csi_sheffield].[dna_analysis] ([analysis_id])
GO
ALTER TABLE [csi_sheffield].[initial_test] CHECK CONSTRAINT [initial_test$initial_analysis_id]
GO
ALTER TABLE [csi_sheffield].[initial_test]  WITH NOCHECK ADD  CONSTRAINT [initial_test$initial_test_ibfk_2] FOREIGN KEY([Analyst_Emp_ID])
REFERENCES [csi_sheffield].[employee] ([id])
GO
ALTER TABLE [csi_sheffield].[initial_test] CHECK CONSTRAINT [initial_test$initial_test_ibfk_2]
GO
ALTER TABLE [csi_sheffield].[isolation_method]  WITH NOCHECK ADD  CONSTRAINT [isolation_method$isolation_method_ibfk_2] FOREIGN KEY([Emp_ID])
REFERENCES [csi_sheffield].[employee] ([id])
GO
ALTER TABLE [csi_sheffield].[isolation_method] CHECK CONSTRAINT [isolation_method$isolation_method_ibfk_2]
GO
ALTER TABLE [csi_sheffield].[laboratory]  WITH NOCHECK ADD  CONSTRAINT [laboratory$fk_lab_emp_id] FOREIGN KEY([lab_emp_id])
REFERENCES [csi_sheffield].[employee] ([id])
GO
ALTER TABLE [csi_sheffield].[laboratory] CHECK CONSTRAINT [laboratory$fk_lab_emp_id]
GO
ALTER TABLE [csi_sheffield].[manager]  WITH NOCHECK ADD  CONSTRAINT [manager$manager_emp_id_fk] FOREIGN KEY([manager_id])
REFERENCES [csi_sheffield].[employee] ([id])
GO
ALTER TABLE [csi_sheffield].[manager] CHECK CONSTRAINT [manager$manager_emp_id_fk]
GO
ALTER TABLE [csi_sheffield].[packaging]  WITH NOCHECK ADD  CONSTRAINT [packaging$packaging_substance_id] FOREIGN KEY([P_Imprint_Code])
REFERENCES [csi_sheffield].[control_substance] ([CSU_Imprint_code])
GO
ALTER TABLE [csi_sheffield].[packaging] CHECK CONSTRAINT [packaging$packaging_substance_id]
GO
ALTER TABLE [csi_sheffield].[reference]  WITH NOCHECK ADD  CONSTRAINT [reference$ref_control_sub_id] FOREIGN KEY([R_Imprint_Code])
REFERENCES [csi_sheffield].[control_substance] ([CSU_Imprint_code])
GO
ALTER TABLE [csi_sheffield].[reference] CHECK CONSTRAINT [reference$ref_control_sub_id]
GO
ALTER TABLE [csi_sheffield].[screening]  WITH NOCHECK ADD  CONSTRAINT [screening$screening_analysis_id_fk] FOREIGN KEY([S_Analysis_ID])
REFERENCES [csi_sheffield].[dna_analysis] ([analysis_id])
GO
ALTER TABLE [csi_sheffield].[screening] CHECK CONSTRAINT [screening$screening_analysis_id_fk]
GO
ALTER TABLE [csi_sheffield].[screening]  WITH NOCHECK ADD  CONSTRAINT [screening$screening_analyst_emp_id_fk] FOREIGN KEY([Screening_Emp_ID])
REFERENCES [csi_sheffield].[employee] ([id])
GO
ALTER TABLE [csi_sheffield].[screening] CHECK CONSTRAINT [screening$screening_analyst_emp_id_fk]
GO
ALTER TABLE [csi_sheffield].[screening_test]  WITH NOCHECK ADD  CONSTRAINT [screening_test$fk_cs_id] FOREIGN KEY([Screening_t_cs_id])
REFERENCES [csi_sheffield].[control_substance] ([CSU_Imprint_code])
GO
ALTER TABLE [csi_sheffield].[screening_test] CHECK CONSTRAINT [screening_test$fk_cs_id]
GO
ALTER TABLE [csi_sheffield].[screening_test]  WITH NOCHECK ADD  CONSTRAINT [screening_test$fk_emp_id] FOREIGN KEY([test_emp_id])
REFERENCES [csi_sheffield].[employee] ([id])
GO
ALTER TABLE [csi_sheffield].[screening_test] CHECK CONSTRAINT [screening_test$fk_emp_id]
GO
ALTER TABLE [csi_sheffield].[shipping]  WITH NOCHECK ADD  CONSTRAINT [shipping$shipping_sub_id_fk] FOREIGN KEY([S_Imprint_Code])
REFERENCES [csi_sheffield].[control_substance] ([CSU_Imprint_code])
GO
ALTER TABLE [csi_sheffield].[shipping] CHECK CONSTRAINT [shipping$shipping_sub_id_fk]
GO
ALTER TABLE [csi_sheffield].[specimen]  WITH NOCHECK ADD  CONSTRAINT [specimen$spec_pathol_fk] FOREIGN KEY([Spec_pathologist_id])
REFERENCES [csi_sheffield].[employee] ([id])
GO
ALTER TABLE [csi_sheffield].[specimen] CHECK CONSTRAINT [specimen$spec_pathol_fk]
GO
ALTER TABLE [csi_sheffield].[specimen]  WITH NOCHECK ADD  CONSTRAINT [specimen$spec_tox_id] FOREIGN KEY([spec_forensoc_toxicologist_id])
REFERENCES [csi_sheffield].[employee] ([id])
GO
ALTER TABLE [csi_sheffield].[specimen] CHECK CONSTRAINT [specimen$spec_tox_id]
GO
ALTER TABLE [csi_sheffield].[specimen]  WITH NOCHECK ADD  CONSTRAINT [specimen$specimen_ibfk_2] FOREIGN KEY([Forensic_Tox_Evi_ID])
REFERENCES [csi_sheffield].[forensic_toxicology_evidence] ([forensic_toxicology_evidence_id])
GO
ALTER TABLE [csi_sheffield].[specimen] CHECK CONSTRAINT [specimen$specimen_ibfk_2]
GO
ALTER TABLE [csi_sheffield].[specimen_container]  WITH NOCHECK ADD  CONSTRAINT [specimen_container$fk_specimen_id] FOREIGN KEY([specimen_id])
REFERENCES [csi_sheffield].[specimen] ([specimen_id])
GO
ALTER TABLE [csi_sheffield].[specimen_container] CHECK CONSTRAINT [specimen_container$fk_specimen_id]
GO
ALTER TABLE [csi_sheffield].[toxicological_analysis]  WITH NOCHECK ADD  CONSTRAINT [toxicological_analysis$fk_tox_anal_lab_id] FOREIGN KEY([tox_analysis_lab_id])
REFERENCES [csi_sheffield].[laboratory] ([lab_id])
GO
ALTER TABLE [csi_sheffield].[toxicological_analysis] CHECK CONSTRAINT [toxicological_analysis$fk_tox_anal_lab_id]
GO
ALTER TABLE [csi_sheffield].[toxicological_analysis]  WITH NOCHECK ADD  CONSTRAINT [toxicological_analysis$tox_anal_emp_id] FOREIGN KEY([tox_analysis_emp_id])
REFERENCES [csi_sheffield].[employee] ([id])
GO
ALTER TABLE [csi_sheffield].[toxicological_analysis] CHECK CONSTRAINT [toxicological_analysis$tox_anal_emp_id]
GO
ALTER TABLE [csi_sheffield].[toxicological_analysis]  WITH NOCHECK ADD  CONSTRAINT [toxicological_analysis$tox_anal_tech_id] FOREIGN KEY([tox_analysis_technique_id])
REFERENCES [csi_sheffield].[analytical_technique] ([technique_ID])
GO
ALTER TABLE [csi_sheffield].[toxicological_analysis] CHECK CONSTRAINT [toxicological_analysis$tox_anal_tech_id]
GO
ALTER TABLE [csi_sheffield].[unit]  WITH NOCHECK ADD  CONSTRAINT [unit$unit_manager_fk] FOREIGN KEY([U_Emp_ID])
REFERENCES [csi_sheffield].[employee] ([id])
GO
ALTER TABLE [csi_sheffield].[unit] CHECK CONSTRAINT [unit$unit_manager_fk]
GO
/****** Object:  StoredProcedure [dbo].[remove_emp]    Script Date: 7/21/2017 8:59:43 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[remove_emp] (@employeeid INT) AS
BEGIN
DELETE FROM csi_sheffield.employee
WHERE employee.id = @employeeid;
END;
GO
/****** Object:  StoredProcedure [dbo].[removeManager]    Script Date: 7/21/2017 8:59:43 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[removeManager]

AS
DECLARE @expdate date
DECLARE @datenow date = CONVERT(date, getdate())
SELECT @expdate = exp_date FROM csi_sheffield.manager

IF @expdate = @datenow
DELETE FROM csi_sheffield.manager WHERE exp_date = @expdate;

GO
/****** Object:  StoredProcedure [dbo].[screeing_emp]    Script Date: 7/21/2017 8:59:43 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

CREATE procedure [dbo].[screeing_emp]

as

begin

select employee.fname, screening.screening_id, employee.fname , screening.screening_details
from csi_sheffield . screening

INNER JOIN csi_sheffield.employee on screening.Screening_Emp_ID=employee.id;

end

GO
/****** Object:  StoredProcedure [dbo].[validateUser]    Script Date: 7/21/2017 8:59:43 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[validateUser]
@email varchar(50),
@pwd varchar(50)

AS

BEGIN
SET NOCOUNT ON

IF EXISTS(SELECT TOP 1 email FROM csi_sheffield.employee WHERE email=@email AND Emp_password = @pwd)
BEGIN

PRINT 'USER EXISTS'
END

ELSE

PRINT 'USER DOES NOT EXIST'
END
GO
EXEC sys.sp_addextendedproperty @name=N'MS_SSMA_SOURCE', @value=N'csi_sheffield.analytical_technique' , @level0type=N'SCHEMA',@level0name=N'csi_sheffield', @level1type=N'TABLE',@level1name=N'analytical_technique'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_SSMA_SOURCE', @value=N'csi_sheffield.control_substance' , @level0type=N'SCHEMA',@level0name=N'csi_sheffield', @level1type=N'TABLE',@level1name=N'control_substance'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_SSMA_SOURCE', @value=N'csi_sheffield.crime' , @level0type=N'SCHEMA',@level0name=N'csi_sheffield', @level1type=N'TABLE',@level1name=N'crime'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_SSMA_SOURCE', @value=N'csi_sheffield.device' , @level0type=N'SCHEMA',@level0name=N'csi_sheffield', @level1type=N'TABLE',@level1name=N'device'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_SSMA_SOURCE', @value=N'csi_sheffield.dna_analysis' , @level0type=N'SCHEMA',@level0name=N'csi_sheffield', @level1type=N'TABLE',@level1name=N'dna_analysis'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_SSMA_SOURCE', @value=N'csi_sheffield.dna_results' , @level0type=N'SCHEMA',@level0name=N'csi_sheffield', @level1type=N'TABLE',@level1name=N'dna_results'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_SSMA_SOURCE', @value=N'csi_sheffield.dna_sample' , @level0type=N'SCHEMA',@level0name=N'csi_sheffield', @level1type=N'TABLE',@level1name=N'dna_sample'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_SSMA_SOURCE', @value=N'csi_sheffield.employee' , @level0type=N'SCHEMA',@level0name=N'csi_sheffield', @level1type=N'TABLE',@level1name=N'employee'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_SSMA_SOURCE', @value=N'csi_sheffield.evidence' , @level0type=N'SCHEMA',@level0name=N'csi_sheffield', @level1type=N'TABLE',@level1name=N'evidence'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_SSMA_SOURCE', @value=N'csi_sheffield.forensic_toxicology_evidence' , @level0type=N'SCHEMA',@level0name=N'csi_sheffield', @level1type=N'TABLE',@level1name=N'forensic_toxicology_evidence'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_SSMA_SOURCE', @value=N'csi_sheffield.initial_test' , @level0type=N'SCHEMA',@level0name=N'csi_sheffield', @level1type=N'TABLE',@level1name=N'initial_test'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_SSMA_SOURCE', @value=N'csi_sheffield.isolation_method' , @level0type=N'SCHEMA',@level0name=N'csi_sheffield', @level1type=N'TABLE',@level1name=N'isolation_method'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_SSMA_SOURCE', @value=N'csi_sheffield.laboratory' , @level0type=N'SCHEMA',@level0name=N'csi_sheffield', @level1type=N'TABLE',@level1name=N'laboratory'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_SSMA_SOURCE', @value=N'csi_sheffield.manager' , @level0type=N'SCHEMA',@level0name=N'csi_sheffield', @level1type=N'TABLE',@level1name=N'manager'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_SSMA_SOURCE', @value=N'csi_sheffield.packaging' , @level0type=N'SCHEMA',@level0name=N'csi_sheffield', @level1type=N'TABLE',@level1name=N'packaging'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_SSMA_SOURCE', @value=N'csi_sheffield.reference' , @level0type=N'SCHEMA',@level0name=N'csi_sheffield', @level1type=N'TABLE',@level1name=N'reference'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_SSMA_SOURCE', @value=N'csi_sheffield.screening' , @level0type=N'SCHEMA',@level0name=N'csi_sheffield', @level1type=N'TABLE',@level1name=N'screening'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_SSMA_SOURCE', @value=N'csi_sheffield.screening_test' , @level0type=N'SCHEMA',@level0name=N'csi_sheffield', @level1type=N'TABLE',@level1name=N'screening_test'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_SSMA_SOURCE', @value=N'csi_sheffield.shipping' , @level0type=N'SCHEMA',@level0name=N'csi_sheffield', @level1type=N'TABLE',@level1name=N'shipping'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_SSMA_SOURCE', @value=N'csi_sheffield.specimen' , @level0type=N'SCHEMA',@level0name=N'csi_sheffield', @level1type=N'TABLE',@level1name=N'specimen'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_SSMA_SOURCE', @value=N'csi_sheffield.specimen_container' , @level0type=N'SCHEMA',@level0name=N'csi_sheffield', @level1type=N'TABLE',@level1name=N'specimen_container'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_SSMA_SOURCE', @value=N'csi_sheffield.storage_media' , @level0type=N'SCHEMA',@level0name=N'csi_sheffield', @level1type=N'TABLE',@level1name=N'storage_media'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_SSMA_SOURCE', @value=N'csi_sheffield.toxicological_analysis' , @level0type=N'SCHEMA',@level0name=N'csi_sheffield', @level1type=N'TABLE',@level1name=N'toxicological_analysis'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_SSMA_SOURCE', @value=N'csi_sheffield.unit' , @level0type=N'SCHEMA',@level0name=N'csi_sheffield', @level1type=N'TABLE',@level1name=N'unit'
GO
USE [master]
GO
ALTER DATABASE [csi_sheffield] SET  READ_WRITE 
GO
