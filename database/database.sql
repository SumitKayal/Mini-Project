-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2021 at 08:33 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `assign_course`
--

CREATE TABLE `assign_course` (
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `course_id` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'Foreign key(course)(Primary Key)',
  `year` year(4) NOT NULL COMMENT 'Primary Key'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `assign_course`
--

INSERT INTO `assign_course` (`email`, `course_id`, `year`) VALUES
('sumit1kayal@gmail.com', 'CSCL302', 2021),
('sumit1kayal@gmail.com', 'CSCL303', 2021),
('suman@gmail.com', 'CSCL304', 2021),
('dipkaghosh@gmail.com', 'CSCL503', 0000),
('dipkaghosh@gmail.com', 'CSCL603', 0000),
('dipkaghosh@gmail.com', 'CSCL604', 0000),
('suman@gmail.com', 'CSCP306', 2021),
('exampleRD@gmail.com', 'CSCP307', 2021),
('exampleRD@gmail.com', 'CSCP308', 2021),
('suman@gmail.com', 'CSHL305', 2021),
('sumit1kayal@gmail.com', 'CSML301', 2021),
('exampleRD@gmail.com', 'CSML401', 2021);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `CID` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'Primary Key',
  `CourseName` text COLLATE utf8_unicode_ci NOT NULL,
  `syllabus` longtext COLLATE utf8_unicode_ci NOT NULL,
  `credit` int(11) NOT NULL,
  `fullmarks` int(11) NOT NULL,
  `sem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`CID`, `CourseName`, `syllabus`, `credit`, `fullmarks`, `sem`) VALUES
('CSCL302', 'Data Structure', 'Module-1:  \r\nData Structure and algorithm preliminaries:\r\nDefinitions; Time and Space analysis of Algorithms; Time and space trade-off, Recursion, ADT\r\nModule-2:\r\nArray:\r\nDefinitions of Arrays and Lists; Strings; Row/Column major representation of Arrays; Sparse matrix.\r\nModule-3:\r\nLinked List:\r\nSingly linked list; circular linked list; doubly linked list, operations on linked list. \r\nModule-4:\r\nStack:\r\nPush; Pop; Applications of Stack; stack representation using array and linked list.\r\nModule-5:\r\nQueue:\r\nRepresentation using array and linked list; Insertion and deletion operations; circular queue; \r\nModule-6:\r\nDictionaries:\r\nskip-lists, hashing, analysis of collision resolution techniques\r\nModule-7:\r\nSearching and Sorting Methods:\r\nInsertion, merge, quick, selection, radix sort with complexity analysis.\r\nModule-8:\r\nTree: \r\nDefinition; Generalized tree representation; Binary tree - definitions and properties; binary tree traversal algorithms with and without recursion.\r\nModule-9:\r\nBinary Search Tree:\r\nCreation, insertion and deletion operations, Threaded tree (One way and Two way); AVL tree balancing; B-tree; Application of trees.\r\nModule-10:\r\n\r\n\r\nPriority Queue, Binary Heaps, Tries and pattern matching, Splay Tree\r\nModule-6:\r\nGraph Algorithms:\r\nRepresentation and Traversal, breadth-first search, depth-first search, connected component, minimal Spanning Tree, Shortest Path, Transitive Closer\r\n\r\n', 4, 100, 3),
('CSCL303', 'Digital Logic', 'Module-1:  \r\nSwitching Theory:\r\nSet, Relation and Lattice; Boolean algebra and switching algebra; Laws andTheorems of Boolean algebra; switching expressions and switching functions, Truth tables andAlgebraic forms of switching functions, Two-level and Multilevel realization of switching functions using logic gates, Minimization of switching functions, universal switching functions. \r\nModule-2:\r\nElements of Digital Logic:\r\nLogic families -TTL, ECL and CMOS, Realization of logic gates; Logic Levels,Fan-in and Fan-out of Logic Gates, Propagation delay, Noise margin and Power dissipation.\r\nModule-3:\r\nAnalysis and Synthesis of Combinational Circuits:\r\nExhaustive (Truth table) and Algebraic (switching\r\nexpression) analysis of combinational circuit; modular combinational logic elements - Decoders,Encoders, Priority encoders, Multiplexers, Demultiplexers, Parity generator, Parity checker andComparator; Design of Integer Adder – Ripple Carry Adder, Carry Look-ahead Adder and BCD Adder;Design of Integer Subtructors and Adder/Subtractor; Design of Booth’s Multiplier, Design ofArithmetic Logic Unit (ALU)\r\nModule-4:\r\nAnalysis and Synthesis of Sequential Circuits:\r\nSequential circuit elements – SR latch, JK latch, SR flip flop, JK flip flop, D flip flop, T flip flop, master slave flip flops and edge triggered flip flops;Characteristic table, Characteristic equation and Excitation table of flip flops; models of sequential circuits – mealy machine, moore machine and their equivalence; Design of sequential circuits – State transition diagram, State table, State minimization, State assignment, Next state maps, Outputmaps, Expressions for flip-flop inputs and Expressions for circuit outputs; analysis of sequentialcircuits; modular sequential logic elements – Registers, Shift Registers and Counters.\r\nModule-5:\r\nDesign of Programmable Logic: Programmable Logic Devices (PLDs)\r\nProgrammable Read-Only Memory (PROM), Programmable Logic Arrays (PLA) and Programmable Array Logic (PAL); Design of Logic Circuits using PLDs, FPGAs\r\n\r\n', 4, 100, 3),
('CSCL304', 'Microprocessor and microcontroller ', 'Module-1:  \r\nIntroduction \r\nArchitecture and Organization of 8085 - Instruction Set; Assembly Language Programming\r\nMemory Interfacing - Data Transfer Techniques - I/O Ports - Interfacing of Switches - Interfacing of LED Displays \r\nCounter and Delays, 8085 Interrupts\r\nModule-2:\r\nPeripheral Devices:\r\n8255, 8279 Sample applications using 8255 and 8279\r\nModule-3:\r\n8086:\r\n8086 Architecture and Organization, Instruction Set, 8086 programming, Interrupts.\r\nModule-4:\r\n8051:\r\n8051 Assembly Language Programming - Interfacing External Memory to 8051 - 8051 Timer/Counter Operation - 8051 Serial Data Communication - Interfacing Keyboard and Display Devices to 8051.\r\n\r\n', 3, 100, 3),
('CSCL402', 'Computer Organization', 'Module-1:  \r\nBinary Systems:\r\nInformation representation, number systems— binary, octal and hexadecimal numbers; number base conversion; complements, binary codes. \r\nModule-2:  \r\nProcessor Design:\r\nAddition of numbers -carry look-ahead and pre-carry vector approaches, carry propagation-free addition. Multiplication -using ripple carry adders, carry save adders, redundant number system arithmetic, Booth’s algorithm. Division -restoring and non-restoring techniques, using repeated multiplication. Floating-point arithmetic- IEEE 754-1985 format, multiplication and addition algorithms. ALU design, instruction formats, addressing modes. \r\nModule-3:  \r\nControl Unit Design:\r\nHardware control unit design, hardware programming language, microprogramming, horizontal, vertical and encoded-control microprogramming, microprogrammed control unit design. \r\nModule-4:  \r\nMemory Organization:\r\nRandom and serial access memories, static and dynamic RAMs, ROM, Associative memory. \r\nModule-5:  \r\nI/O Organization:\r\nDifferent techniques of addressing I/O devices, data transfer techniques, programmed interrupt, DMA, I/O channels, channel programming, data transfer over synchronous and asynchronous buses, bus control.\r\n\r\n', 3, 100, 4),
('CSCL403', 'Design & Analysis of Algorithms', 'Module-1:  \r\nReview:\r\nMathematical Induction, Probability, Recurrence Relations.\r\nModule-2:  \r\nAlgorithms:\r\nEfficiency, Analysis, Time-complexity, Order and their properties, Use of limits. \r\n\r\n\r\nModule-3:  \r\nAlgorithm Paradigms: \r\nDivide and Conquer, Quicksort, Strassen’s Matrix Multiplication Algorithm, Arithmetic with Large integers. \r\n\r\n\r\nModule-4:  \r\nDynamic Programming:\r\nTravelling salesman Problem., Chained Matrix Multiplication., Optimal Binary Search trees. \r\nModule-5:  \r\nGreedy Algorithm:\r\nMinimum Spanning trees; Prim’s Algorithm, Kruskal Algorithm. \r\nModule-6:  \r\nComputational Complexity and intractability:\r\nPolynomial reducibility, P and NP, NP-hard and NP-complete problems. Satisfiability problem. Reductions.\r\n\r\n', 4, 100, 4),
('CSCL404', 'Operating Systems', 'Module-1:  \r\nIntroduction:\r\nBasic architectural concepts, interrupt handling, concepts of batch-processing, multiprogramming, time- sharing, real-time operations; Resource Manager view, process view and hierarchical view of an OS. \r\nModule-2:  \r\nMemory management:\r\nPartitioning, paging, concepts of virtual memory, demand-paging -page replacement algorithms, working set theory, load control, segmentation, segmentation and demand-paging, Cache memory management. \r\nModule-3:  \r\nProcessor management:\r\nCPU scheduling— short-term, medium term and long term scheduling, non-pre-emptive and pre-emptive algorithms, performance analysis of multiprogramming, multiprocessing and interactive systems; Concurrent processes, precedence graphs, critical section problem— 2-process and n-process software and hardware solutions, semaphores; Classical process co-ordination problems, Producer-consumer problem, Reader-writer problem, Dining philosophers problem, Barber’s shop problem, Interprocess communication. \r\nModule-4:  \r\nConcurrent Programming:\r\nCritical region, conditional critical region, monitors, concurrent languages concurrent pascal, communicating sequential process (CSP); Deadlocks: prevention, avoidance, detection and recovery. \r\nModule-5:  \r\nDevice Management:\r\nScheduling algorithms -FCFS, shortest-seek-time-first, SCAN, C-SCAN, LOOK, C-LOOK algorithms, spooling, spool management algorithm. \r\nModule-6:  \r\nInformation Management:\r\nFile concept, file support, directory structures, symbolic file directory, basic file directory, logical file system, physical file system, access methods, file protection, file allocation strategies. \r\nModule-6:  \r\nProtection:\r\nGoals, policies and mechanisms, domain of protection, access matrix and its implementation, access lists, capability lists, Lock/Key mechanisms, passwords, dynamic protection scheme, security concepts and public and private keys, RSA encryption and decryption algorithms. \r\n\r\n', 4, 100, 4),
('CSCL501', 'Computer Networks ', 'Module-1:  \r\nIntroduction:\r\nComputer networks and distributed systems, classifications of computer networks, layered network structures. \r\nModule-2:  \r\nData Communication Fundamentals:\r\nChannel characteristics. Transmission modes. Transmission media- architecture, characteristics and applications. Modulation techniques. Bandwidth utilization techniques- Frequency division, Time division, Wave division and Code Division multiplexing, Switched Networks- Circuit switching and Packet Switching. \r\nModule-3:  \r\nQueuing Theory:\r\nM/M queuing systems, M/G/I queuing system; Network performance analysis using queuing theory.\r\nModule-4:  \r\nNetwork Structure:\r\nConcepts of subnets, backbone and local access. Channel sharing techniques FDM, TDM. Polling and concentration. Message transport- circuit, message and packet switching. Topological design of a network.\r\nModule-5:  \r\nData Link Layer:\r\nServices and design issues, framing techniques, error handling and flow control, stop and wait. Connection oriented and Connection-less approach. Sliding window and APRPANET protocols, HDCLC standard. \r\nModule-6:  \r\nNetwork Layer:\r\nDesign issues, internal organization of a subnet, routing and congestion control techniques, network architecture and protocols, concepts in protocol design, CCITT recommendation X. 25.\r\nModule-7:  \r\nLANs and their Interconnection :\r\nBasic concepts, architectures, protocols, management and performance of Ethernet, token ring and token bus LANS; Repeaters and Bridges. \r\nModule-8:  \r\nInternet:\r\nIP protocol, Internet control protocols— ICMP, APR and RAPP, Internet routing protocols— OSPF, BGP and CIDR. ATM: ATM switches and AAL layer protocols. \r\nModule-9:  \r\nNetwork Security:\r\nElectronic mail, directory services and network management. \r\nModule-10:  \r\nWireless and mobile communication:\r\nWireless transmission, cellular radio, personal communication service, wireless protocol. Network planning, Gigabit and Terabit technology, CDMA, WCDMA, WDM, optical communication networks.\r\n\r\n', 4, 100, 5),
('CSCL502', 'Database Management System ', 'Module-1:  \r\nIntroduction:\r\nPurpose of database systems, data abstraction and models, instances and schemes, database manager, database users and their interactions, data definition and manipulation language, data dictionary, architecture. \r\nModule-2:  \r\nEntity-relationship model :\r\nEntities and entity sets, relationships and relationship sets, mapping constraints, E-R diagram, primary keys, strong and weak entities, reducing E-R diagrams to tables, trees or graphs, generalization and specialization, aggregation. \r\nModule-3:  \r\nRelational model :\r\nStructure of a relational database, operation on relations, relational algebra, tuple and domain relational calculus, salient feature of a query language. \r\nModule-4:  \r\nStructured query language:\r\nDescription an actual RDBMS and SQL.\r\nModule-5:  \r\nNormalization:\r\nPitfalls in RDBMS, importance of normalization, functional, multi-valued and join dependencies, INF to 5NF, limitations of RDBMS. \r\nModule-6:  \r\nDatabase tuning:\r\nIndex selection and clustering, tuning of conceptual schema, denormalization, tuning queries and views. \r\nModule-7:  \r\nQuery Optimization:\r\nImportance of query processing, equivalence of queries, cost estimation for processing a query, general strategies, bi-relational and multi-relational join algorithms, algebraic manipulation. \r\nModule-8:  \r\nCrash recovery:\r\nFailure classification, transactions, log maintenance, check point implementation, shadow paging, example of an actual implementation. \r\nModule-9:  \r\nConcurrency Control in RDBMS:\r\nTesting for serializability, lock based and time-stamp based protocols; Deadlock detection and Recovery. \r\nModule-10:  \r\nOther types of Databases:\r\nObject Oriented Database, Distributed Database, Data Warehousing, Data Mining, Spatial and Geographic Databases, Multimedia Databases. \r\n\r\n', 4, 100, 5),
('CSCL503', 'Software Engineering', 'Module-1:  \r\nIntroduction:\r\nObjectives, Definitions, Software and Systems Engineering, Software Qualities, Different phases of software development. \r\nModule-2:  \r\nSoftware Process Models:\r\nWaterfall, Prototyping, RAD, Incremental model, Spiral model, Agile Programming.  \r\nModule-3:  \r\nSoftware Requirements Engineering:\r\nRequirement elicitation, Requirements analysis, Requirements negotiation, Characteristics, Components, Prototyping, Basic concepts of formal requirements specification, Requirements specification, Requirements validation and Requirements tracing, requirements engineering tools.\r\nModule-4:  \r\nSoftware Design:\r\nDesign Paradigms such as structured design, object-oriented analysis and design, event driven design, component-level design, aspect oriented design, function oriented design, service oriented design, design tools. \r\nModule-5:  \r\nSoftware Testing:\r\nVerification and validation concepts, unit testing, integration testing, system testing, test plan creation and test case generation, black-box and white-box testing techniques, Regression testing and test automation. \r\nModule-6:  \r\nSoftware Project Planning:\r\nEffort Estimation models, Project Scheduling. Software Maintenance, Software configuration management and version control. \r\nModule-7:  \r\nSoftware Quality Management:\r\nQuality factors, Quality and standards, Quality Assurance, Quality Policy, Quality Control, Maturity models in process improvement. \r\nModule-8:  \r\nSoftware Risk Management:\r\nRisk identification and management, Risk analysis and evaluation, Risk mitigation approaches. \r\n\r\n', 4, 100, 5),
('CSCL504', 'Computer Architecture ', 'Module-1:  \r\nIntroduction:\r\nEvolution of computer architecture. Structure of instruction set of a computer and desired attributes. Instruction formats. Addressing modes. Architectural classifications based on multiplicity of data and instruction (SISD, SIMD, MISD and MIMD structures). CISC versus RISC architectures. Performance metric. \r\nModule-2:  \r\nPipelining:\r\nBasic concepts. Performance of a static linear pipeline. Instruction pipeline. Hazards (structural, data and control hazards) and their remedies, instruction level parallelism (ILP). Dynamic Pipeline. Super pipelining, super scalar processing, vector processing and pipelined vector processing. \r\nModule-3:  \r\nMemory System:\r\nMemory hierarchy. Cache memory — fundamental concepts, reducing cache misses and cache miss penalty. Interleaved memory. virtual memory. \r\nModule-4:  \r\nI/O Systems:\r\nDesign Issues, Performance Measures.\r\nModule-5:  \r\nMultiprocessor Architecture:\r\nLoosely Coupled and Tightly Coupled Systems. Concurrency and Synchronization. Scalability. Models of Consistency. Application of SIMD. Structures.\r\nModule-6:  \r\nInterconnection Network:\r\nDefinition, Types of    Interconnection    Networks. Examples of Baseline, Shuffle-Exchange, Omega, Cube. Comparison and application. \r\nModule-7:  \r\nSystolic Architecture:\r\nMapping of Algorithm to Array Structures.  Systolic Processors - Mapping, Design and Optimization, Wave front Array Processor. \r\nModule-8:  \r\nData Flow Architecture:\r\nData Flow Graphs. Petri Nets. Static and Dynamic DFA. Programming Environment- Different Models, Languages, Compilers, Dependence Analysis, Message Passing, Program Mapping to Multiprocessors, Synchronization. \r\nModule-8:  \r\nDistributed System Architecture :\r\nIntroduction. Thread level parallelism and multithreading. Topology. Degree of coupling. Decentralized client-server model. \r\n\r\n', 3, 100, 5),
('CSCL505', 'Optimization Techniques ', 'Module-1:  \r\nCombinatorial Optimization :\r\nAssignment and transportation problem. Network flow problem. Matching problem in Graphs. \r\nModule-2:  \r\nLinear Programming:\r\nSimplex and revised simplex algorithms, Bland’s rule, duality theory, large scale linear programming, computational complexity of simplex method, polynomial time algorithms— ellipsoidal and Karmarkar’s methods.\r\nModule-3:  \r\nInteger Programming:\r\nFormulation of integer and mixed integer programming problems, cutting planes and branch and bound algorithms, introduction to the ideas of NP-completeness, travelling salesman and other related problems. \r\nModule-4:  \r\nNon-linear Programming:\r\nGeneral constrained mathematical programming problems, KuhnTucker-Lagrangian necessary and sufficient conditions, interior point methods, standard algorithms like feasible direction and gradient projections convergence of the methods, convex programming problems, quadratic programming. \r\n\r\n\r\nModule-5:  \r\nGame Theory:\r\nConcept of a game. Two person zero-sum game. Pure and mixed strategy games. Saddle point, Odds method. Dominance method and graphical method for solving mixed strategy game.\r\nModule-6:  \r\nQueuing Theory:\r\nCharacteristics of M/M/1 Queue model. Application of Poisson and Exponential distribution in estimating arrival and service rate. Application of Queue model. \r\n\r\n', 4, 100, 5),
('CSCL601', 'Formal Languages and Automata theory', 'Module-1:  \r\n\r\n\r\nGrammars, Languages generated, Chomskian Hierarchy, CFG, Ambiguity, Reduced grammars, Normal forms. \r\nModule-2:  \r\n\r\n\r\nFSA, NFSA, NFSA with € moves, Regular expressions, Equivalence of regular expression and FSA, Equivalence of type 3 grammars and FSA, Pumping lemma, Closure and decidability results, Myhill-Nerode theorem, Minimization, FSA with output, Problems. \r\nModule-3:  \r\n\r\n\r\nPushdown Automata, Acceptance by final state and empty store, Equivalence to CFG, Deterministic PDA. \r\nModule-4:  \r\n\r\n\r\nTuring Machines - Construction, Techniques of TM construction, TM as acceptor and i/o device, Problems. Generalized and restricted versions. \r\nModule-5:  \r\n\r\n\r\nHalting problems - Universal TM-recursive and recursively enumerable sets - Decidability - Rice’s Theorem, PCP. \r\nModule-6:  \r\n\r\n\r\nTime and Tape complexity of TM, P and NP, Cook’s theorem - NP-Complete Problems. \r\nModule-7:  \r\n\r\n\r\nNew Paradigms of computing, DNA computing, Membrane computing.\r\n\r\n', 4, 100, 6),
('CSCL602', 'Computer Graphics', 'Module-1:  \r\nIntroduction to Graphics and Graphics Hardware System\r\nVideo display devices, CRT, LCD Display Devices Raster scan displays, Random scan displays, Raster scan systems, Random scan Systems.\r\nInput devices, keyboard, mouse, Trackball and Spaceball, Joystick, Data glove, Digitizers, Image scanners, Touch panels, Light pens, Voice systems. Hardcopy devices, Printers, Plotters.\r\nModule-2:\r\nOutput Primitives and Clipping operations \r\n\r\n\r\nAlgorithms for drawing 2D Primitives lines (DDA and Bresenham’s line algorithm), circles (Bresenham’s and midpoint circle algorithm), ellipses (midpoint ellipse algorithm), other curves (conic sections, polynomials and spline curves). Antialiasing and filtering techniques.\r\nLine clipping (Cohen-Sutherland algorithm), clip windows, circles, ellipses, polygon, clipping with Sutherland Hodgeman algorithm.\r\nModule-3:\r\nGeometric transformation \r\n2 D Transformation: Basic transformation, Translation, Rotation, scaling, Matrix Representations and Homogeneous coordinates, window to viewport transformation.\r\n3 D Concepts: Parallel projection and Perspective projection, 3 D Transformation.\r\nModule-4:\r\n3 D Object Representation, Colour models and rendering \r\nPolygon meshes in 3 D, Spheres, Ellipsoid, Bezier curves and Bezier surfaces, B-spline curves and surfaces, solid modeling, sweep representation, constructive solid geometry methods. Achromatic and color models.\r\nShading, rendering techniques and visible surface detection method: Basic illumination, diffuse reflection, specular reflection, transparency, shadows. Polygon rendering method, Gouraud & Phong shading, Ray tracing method, recursive ray tracing, radiosity method. Depth-buffer method, A-buffer method, Depth-sorting method (painter’s algorithm), Oct-trees method.\r\nModule-5:\r\nIntroduction to multimedia \r\nFile formats for BMP, GIF, TIFF, IPEG, MPEG-II, Animation techniques and languages. Design of animation sequences, Computer Animation languages, Elementary filtering techniques and elementary Image Processing techniques \r\n\r\n', 4, 100, 6),
('CSCL603', 'Distributed system ', 'Module-1:  \r\nIntroduction\r\n Basic Concepts – Centralized Parallel and Distributed Algorithms, Examples of distributed systems, Correctness proof of distributed algorithms; Design issues in a distributed system; Distributed Computing Models-Distributed Operating System, Network Operating System, Middleware based Distributed System; Client Server model – 2 tier and n-tier CS model.\r\nModule-2:\r\nInter Process Communication (IPC) \r\n Shared memory and message passing systems, synchronous and asynchronous systems, transient and persistent system, point-to-point and publish-subscribe systems; Distributed shared memory and memory consistency models; Group communication - multicast and anycast communication, message ordering and message delivery; Case studies – Socket, MPI and JMS.\r\nModule-3:\r\nRemote Procedure Call (RPC) \r\n Local call vs Remote call mechanism; Issues in RPC – transparency, parameter passing, heterogeneity, dynamic binding, client failure and server failure; Case Studies – RMI, CORBA and DCOM.\r\nModule-4:\r\nSynchronization\r\nin Distributed Systems \r\n\r\n\r\nClock, events and process state in distributed systems; Physical clock synchronization, Logical clocks and Vector clocks; Distributed Snapshots – Global States; Distributed mutual exclusions; Leader election algorithms; Distributed transactions; Deadlocks in distributed systems;\r\nModule-5:\r\nFault Tolerance \r\n Basic concepts, fault models, consensus problems and its applications, commit protocols, voting protocols, Checkpointing and recovery, reliable communication.\r\nModule 6: \r\nResource Management \r\nTask management approach, Load balancing approach, Load sharing approach; Process migration.\r\n\r\n', 3, 100, 6),
('CSCL604', 'Internet Technology', 'Module-1:  \r\nI Introduction to Internet\r\nNetwork layer for Internet.\r\nModule-2:\r\nCIDR\r\nAddress assignment and Routing, NAT.\r\nModule-3:\r\nClient-Server and P2P architecture \r\nN-tiered system, MVC architecture DNS.\r\nModule-4:\r\nInternet applications \r\nFTP, Telnet, Email, Chat.\r\nModule-5:\r\nWorld Wide Web \r\nWeb server (apache), browser: plug-ins, helper applications, HTTP protocol.  \r\nModule 6: \r\nDesigning web pages\r\nHTML, CSS, Java Script, JQquery.\r\n\r\n\r\nModule 7: \r\nServer Side Programming \r\nPHP, JSP, Servlets.\r\nModule 8: \r\nWeb services\r\nSOAP, UDDI, XML, XML schema, SOA.\r\nModule 9: \r\nContent Delivery \r\nProxy Server, Server Farm, CDN, bit-torrent systems. Distributed hashing.\r\nModule 10: \r\nSearch Mechanisms \r\nSearch Engine, Crawler Technology, Filtering Technology Content based Searching, Agent Technology, Internet Robot.\r\n\r\n', 3, 100, 6),
('CSCP306', 'Data Structure Lab', 'Module-1:  \r\nIntroduction \r\nAssignments on developing programs and functions related to the theoretical paper coverage on Data Structures.\r\n\r\n', 2, 100, 3),
('CSCP307', 'Digital logic and Microprocessor Lab ', 'Module-1:  \r\nDigital Logic Lab: \r\nFamiliarity with trainer kits, IC testing kits and ICchips for working with basic logic gates. Experiments with combinational circuits using two level and multilevel logic design. Experiments on function generation using multiplexers and decoders. Experiments with sequential circuits using FFs. \r\nModule-2:  \r\nMicroprocessor Lab: \r\nProgramming on 8085 and 8086 trainer kit: Writing and executing ISS for vectored Interrupt. Developing applications using Peripheral devices like 8255/8279. Programming on 8051;\r\n\r\n', 4, 100, 3),
('CSCP308', 'Computer Programming Lab-I (C & Python)', '', 2, 100, 3),
('CSCP406', 'Computer Organization Lab', 'Module-1:  \r\nSystem design using Hardware Description Languages such as VHDL or Verilog: Programming and Subsystem Design Concepts, Design of Multiplexer, Parity Generator, Adder, Subtractor, Multiplier, ALU, Datapaths and Control Unit Design. \r\n\r\n', 2, 100, 4),
('CSCP407', 'Operating Systems Lab', 'Module-1:  \r\nCase study: UNIX OS file system, shell, filters, shell programming, programming with the standard I/O, UNIX system calls and system administration.\r\n\r\n', 2, 100, 4),
('CSCP408', 'Computer Programming Lab-II (OOP)', 'Module-1:  \r\nObject Model:\r\nAbstraction, Encapsulation, Modularity, Links and Association, Generalization, Inheritance, Aggregation, Polymorphism, using Instantiation, Metadata & Metaclass, Typing, Concurrency, Persistence.\r\nModule-2:  \r\nObject Oriented Languages and Programming:\r\nOO Languages Features, Survey of OO Languages, Multi method vs. Object Based vs. Class based languages, Java / C++, OO Data Model, Complex Object, Persistence, Transaction, Concurrency Control, Object oriented design pattern\r\n\r\n', 4, 100, 4),
('CSCP506', 'Computer Networks Lab', 'Module-1:  \r\nAssignments:\r\nAssignment 1: Familiarity with different components: Network cards, hubs, switches, routers, repeaters, modems, Fibre optic cables and connectivity, ISDN, leased lines.\r\nAssignment 2: Characteristics and uses of a Network OS (Peer to peer and Client Server connectivity).\r\nAssignment 3: Establishing a small LAN including hardware and software. (Coax / UTP, Optical fibers)\r\nAssignment 4: Socket Programming and Device drivers.\r\nAssignment 5: Proxy Servers / IP masquerading.\r\nAssignment 6: Error detection and correction, trouble shooting.\r\nAssignment 7: Setting up mail servers, data-base servers, firewalls.\r\nAssignment 8: Study of Network Simulator. \r\n\r\n', 2, 100, 5),
('CSCP507', 'DBMS Lab', 'Module-1:  \r\nAssignments:\r\nAssignment 1: Study of features of a Standard Commercial database, DBMS Configuration. DBA Mode -Start-up, Shut down. User Creation, User Maintenance.\r\nAssignment 2: User Mode- Creating Table space and Maintenance of Table space. Application design. Familiarities with SQL and PI /SQL.\r\nAssignment 3: Form Design.\r\nAssignment 4: Use of Cursors, Triggers.\r\nAssignment 5: Report Generation.\r\nAssignment 6: Bach-up and restore of a Database.\r\nAssignment 7: Application I\r\nAssignment 8:  Application II\r\nAssignment 9: Application III\r\n\r\n', 2, 100, 5),
('CSCP508', 'Software Engineering Lab', 'Module-1:  \r\nAssignments:\r\nAssignment 1: Familiarities with tools/techniques for Software Engineering\r\nAssignment 2: DFD, E-R Diagram creation for a given problem\r\nAssignment 3: Problems on interactive data entry screens, transaction processing, report generations.\r\nAssignment 4: Design and development of Application Software\r\nAssignment 5: Design and development of System Software\r\nAssignment 6: Designing of Test data for procedural programs\r\nAssignment 7: Designing of Test data for object oriented programs\r\nAssignment 8: Design and development for quality measure\r\nAssignment 9: Implementation of use-case diagrams and related notations.\r\n\r\n', 2, 100, 5),
('CSCP606', 'Computer Graphics Lab ', 'Module-1:  \r\nComputer Graphics Lab\r\n\r\n\r\nIntroduction to Java Programming Language\r\nIntroduction graphics programming \r\nWAP to draw a line using DDA Algorithms\r\nWAP to draw a line using Bresenham’s Algorithms\r\nWAP to draw a circle using Bresenham’s Algorithms \r\nWAP to draw a circle using Mid-Point Algorithms\r\nWAP to draw a eclipse using Mid-Point algorithms\r\nWAP to translate and scale a triangle\r\nWAP to rotate a triangle\r\nWAP to reflect a triangle\r\nCohen Sutherland Clipping Algorithm Open Ended Practicals\r\nWAP to draw hyperbola\r\nWAP to clip a polygon using Sutherland Hodgeman Algorithm\r\nImplement different line drawing algorithms\r\nImplement three dimensional objects and planar geometric Projection\r\nImplement Quadtree\r\nImplement Image transformation algorithms\r\nImplement Image enhancement algorithms\r\nImplement Image segmentation and restoration algorithms\r\nDesign and Develop a GUI based Game using Java\r\n\r\n', 4, 100, 6),
('CSCP607', 'Internet Technology Lab', 'Module-1:  \r\nInternet Technology Lab\r\n\r\n\r\nConfiguring Name Server, Firewall setting.\r\nWeb page design: HTML, CSS, DOM, Java Script, JQuery.\r\nWeb server configuration: apache, tomcat; Server side programming: processing forms, PHP, JSP, Servlet, AJAX.\r\nXML and XSD.\r\nAssignment 1: Configuration of Name Server, Firewall setting.\r\nAssignment 2: Web page design: HTML, CSS, DOM, Java Script, JQuery.\r\nAssignment 3: Web server configuration: apache, tomcat.\r\nAssignment 4: Server side programming: processing forms, PHP, JSP, Servlet.\r\nAssignment 5: Accessing and modifying database: PHP/JSP with MySQL.\r\nAssignment 6: Use of AJAX, XML and XSD.\r\nAssignment 7: E-Commerce site prototype development.\r\nAssignment 8: Web portal development for a university. \r\n\r\n', 2, 100, 6),
('CSCP608', 'Mini Programming Project(Lab)', 'Module-1:  \r\nMini Programming Project\r\nReal Life Problems.\r\nProblem Formulation, Identification of deliverables, Design, Documentation, Identification of Platforms, Tools, Techniques.\r\nTechnical Report Writing.\r\nLanguages: Python/Java/GPU Programming/ Software Engineering Tools. Participation in National & International Hackathon / Programming Competitions.\r\n\r\n', 2, 100, 6),
('CSHL305', 'Environment and society', 'Module-1:  \r\nIntroduction \r\nSocial topics relevant to technological innovation in the perspective of degradation of environments will be covered here.\r\n\r\n', 2, 100, 3),
('CSHL405', 'Social issues and Professional Practice', 'Module-1:  \r\nIntroduction:\r\nSocial Context, Analytical Tools, Professional Ethics, Intellectual Property, Privacy and Civil Liberties, Professional Communication, Sustainability, History, Economies of Computing, Security Policies, Laws and Computer Crimes.\r\n\r\n', 2, 100, 4),
('CSHL605', 'Innovation and Entrepreneurship development', 'Module-1:  \r\nEntrepreneurship\r\n\r\n\r\nEntrepreneur characteristics, Classification of Entrepreneurships, Incorporation of Business, Forms of Business organizations, Role of Entrepreneurship in economic development, Start-ups.\r\nModule-2:\r\nIdea Generation and Opportunity Assessment\r\nIdeas in Entrepreneurships, Sources of New Ideas, Techniques for generating ideas, Opportunity Recognition, Steps in tapping opportunities.\r\nModule-3:\r\nProject Formulation and Appraisal\r\n \r\nPreparation of Project Report, Content, Guidelines for Report preparation, Project Appraisal techniques, economic – Steps Analysis, Financial Analysis, Market Analysis, Technical Feasibility.\r\nModule-4:\r\nInstitutions Supporting Small Business Enterprises \r\nCentral level Institutions: NABARD, SIDBI, NIC, KVIC, SIDIO, NSIC Ltd, etc. State level Institutions: DICs, SFC, SSIDC, Other financial assistance.\r\nModule-5:\r\nGovernment Policy and Taxation Benefits\r\nGovernment Policy for SSIs, tax Incentives and Concessions, Non-tax Concessions –Rehabilitation and Investment Allowances.\r\n\r\n', 4, 100, 6),
('CSML301', 'Discrete Mathematics', 'Module-1:  \r\nAsymptotic Notations\r\nbig-Oh, small-oh, Theta, Omega\r\nModule-2:\r\nSets, Relation and Functions\r\nSet and subsets, Empty set and power set, operations on sets, Cartesian Product of sets, cardinality of a set, countable and uncountable sets. Relations, Equivalence relation, Equivalence classes, partial orders. Functions, types of Functions (Injective, Surjective and Bijective), Identity function, composite Functions, Invertible Functions.\r\nModule-3:\r\nMathematical Logic\r\nPropositions, Contrapositive, Connectives, Truth Table, Conjunctive and disjunctive normal forms, Validity of well-formed formula, Propositional inference rules (concepts of modus ponens and modus tollens), Tautologies, Predicate logic, Universal and existential Quantifiers, Negations\r\nModule-4:\r\nProof Techniques\r\n The Axiomatic Method, Proof by Cases, Proving an Implication, Proving an “If and Only If”, Proof by contradiction, Proofs about Sets, Good Proofs in Practice, Mathematical induction, number theory\r\nModule-5:\r\nCounting\r\n Counting and functions, recurrences, cardinality rules (product and division rule, Inclusion-Exclusion, Combinatorial proofs, Pigeonhole Principle), generating function, infinite sets, recurrences involving convolution, Catalan number\r\nModule-6:\r\nGraph theory\r\nBasics of graph theory (tree, bipartite graph, complete graph), directed graphs, complement, connectedness and reachability, graph representation, Eulerian paths and circuits, Hamiltonian paths and circuits in graphs and tournaments, spanning tree, planar graphs, Euler’s formula, Kuratowski\'s theorem (statement only), notions of graph isomorphism, counting in graphs, degree of a graph, number of spanning trees (Cayley\'s theorem), notions of chromatic number, clique number, independent set, vertex cover, etc.\r\n\r\n', 4, 100, 3),
('CSML401', 'Probability and Stochastic Process', 'Module-1:  \r\nProbability theory:\r\nMean, Median, Mode, Standard deviation, Sample Space and Events, Probability, conditional probability and independence; Random variables and their distributions (discrete and continuous), bivariate and multivariate distributions; Laws of large numbers, central limit theorem (statement and use only). \r\nModule-2:  \r\nStochastic process:  \r\nDefinition and examples of stochastic processes, weak and strong stationarity; Markov chains with finite and countable state spaces -classification of states, Markov processes, Poisson processes, birth and death processes, branching processes, queuing processes. \r\nModule-3:  \r\nSelected applications:\r\nAnalysis of algorithms, performance evaluation and modelling of computer systems. \r\n\r\n', 4, 100, 4);

-- --------------------------------------------------------

--
-- Table structure for table `course_outcome`
--

CREATE TABLE `course_outcome` (
  `cid` text COLLATE utf8_unicode_ci NOT NULL,
  `oid` int(11) NOT NULL COMMENT 'Primary Key',
  `outcomeName` text COLLATE utf8_unicode_ci NOT NULL,
  `outcome` text COLLATE utf8_unicode_ci NOT NULL,
  `year` year(4) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `course_outcome`
--

INSERT INTO `course_outcome` (`cid`, `oid`, `outcomeName`, `outcome`, `year`) VALUES
('CSCP307', 26, 'CO1', 'An ability to operate laboratory equipment.', 2021),
('CSCP307', 27, 'CO2', ' An ability to construct, analyze, and troubleshoot simple combinational and sequential circuits.', 2021),
('CSCP307', 28, 'CO3', 'An ability to design and troubleshoot a simple state machine', 2021),
('CSCP307', 29, 'CO4', 'An ability to measure and record the experimental data, analyze the results, and prepare a formal laboratory report.', 2021),
('CSML301', 30, 'CO1', 'a student will be able to construct simple mathematical proofs and possess the ability to verify them ABET[ (a, j)].', 2021),
('CSML301', 31, 'CO2', 'Have substantial experience to comprehend formal logical arguments ABET[ (a, b, c)]', 2021),
('CSML301', 32, 'CO3', 'Be skillful in expressing mathematical properties formally via the formal language of propositional logic and predicate logic ABET[ (a)]', 2021),
('CSML301', 33, 'CO4', 'Be able to specify and manipulate basic mathematical objects such as sets, functions, and relations and will also be able to verify simple mathematical properties that these objects possess ABET[ (a)]', 2021),
('CSML301', 34, 'CO5', 'Acquire ability to describe computer programs (e.g. recursive functions) in a formal mathematical manner ABET[ (a, c, i, j)] ', 2021),
('CSML301', 35, 'CO6', 'Be able to apply basic counting techniques to solve combinatorial problems ABET[ (a)].', 2021),
('CSML301', 36, 'CO7', 'Gain experience in using various techniques of mathematical induction (weak, strong and structural induction) to prove simple mathematical properties of a variety of discrete structures ABET[ (a, c, j)]', 2021),
('CSCL302', 37, 'CO1', 'Ability to analyze algorithms and aalgorithm correctness', 2021),
('CSCL302', 38, 'CO2', 'Ability to summarize searching and sorting techniques', 2021),
('CSCL302', 39, 'CO3', 'Ability to describe stack,queue and linked list operation', 2021),
('CSCL302', 40, 'CO4', 'Ability to have knowledge of treeand graphs concepts.', 2021),
('CSCL303', 41, 'CO1', 'Construct and verify the network theorems.', 2021),
('CSCL303', 42, 'CO2', ' Construct and determine value unknown inductance of inductor and capacitance using AC brides.', 2021),
('CSCL303', 43, 'CO3', 'Determine the time constant of RL and RC circuits', 2021),
('CSCL303', 44, 'CO4', 'Determine the value of resistance of resistor, inductance of inductor and capacitance of capacitor using colour code method', 2021);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `exmroll` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'Foreign Key(stu_info)(Primary Key)',
  `oid` int(10) NOT NULL COMMENT 'Foreign Key(Course_outcome)(Primary Key)',
  `fscore` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`exmroll`, `oid`, `fscore`) VALUES
('T91/CSE/186001', 21, 2),
('T91/CSE/186001', 22, 2),
('T91/CSE/186001', 23, 2),
('T91/CSE/186001', 24, 2),
('T91/CSE/186001', 25, 2),
('T91/CSE/186001', 26, 1),
('T91/CSE/186001', 27, 2),
('T91/CSE/186001', 28, 4),
('T91/CSE/186001', 29, 1),
('T91/CSE/186001', 30, 1),
('T91/CSE/186001', 31, 1),
('T91/CSE/186001', 32, 1),
('T91/CSE/186001', 33, 2),
('T91/CSE/186001', 34, 2),
('T91/CSE/186001', 35, 2),
('T91/CSE/186001', 36, 2);

-- --------------------------------------------------------

--
-- Table structure for table `mid_question`
--

CREATE TABLE `mid_question` (
  `qnum` text COLLATE utf8_unicode_ci NOT NULL,
  `qtext` longtext COLLATE utf8_unicode_ci NOT NULL,
  `oid` int(11) NOT NULL,
  `fullmarks` int(11) NOT NULL,
  `qid` int(11) NOT NULL COMMENT 'Primary Key'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mid_question`
--

INSERT INTO `mid_question` (`qnum`, `qtext`, `oid`, `fullmarks`, `qid`) VALUES
('1.1', 'question one', 27, 2, 1),
('1.2', 'question onequestion one', 28, 2, 2),
('2.1', 'question onequestion onequestion one', 29, 4, 3),
('2.2', 'question onequestion onequestion onequestion one', 28, 4, 4),
('3.1', 'question onequestion onequestion onequestion onequestion one', 26, 8, 5);

-- --------------------------------------------------------

--
-- Table structure for table `professor`
--

CREATE TABLE `professor` (
  `Email` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'Primary key',
  `Name` text COLLATE utf8_unicode_ci NOT NULL,
  `Type` text COLLATE utf8_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `Gender` text COLLATE utf8_unicode_ci NOT NULL,
  `Password` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `CV` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `rag_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `professor`
--

INSERT INTO `professor` (`Email`, `Name`, `Type`, `dob`, `Gender`, `Password`, `CV`, `rag_time`) VALUES
('boserohit@gmail.com', 'Rohit Bose', 'Faculty', '1995-08-12', 'Male', 'rohit1995', NULL, '2021-08-11 20:25:07'),
('debopriyo@gmail.com', 'Debopriyo Ghosh', 'Faculty', '1984-02-07', 'Male', NULL, NULL, '2021-08-23 23:05:04'),
('dipkaghosh@gmail.com', 'Dipak Ghosh', 'Guest', '2004-07-25', 'Male', 'dipak2004', NULL, '2021-08-25 14:54:02'),
('exampleRD@gmail.com', 'Rajib Das', 'HOD', '1980-04-16', 'Male', 'dasrajib', NULL, '2021-07-31 18:54:43'),
('examplesk@gmail.com', 'Sumirmal Khatua', 'Guest', '1990-02-02', 'Male', 'sunirmal1990', NULL, '2021-08-04 18:54:43'),
('kalyan@gmail.com', 'Kalyan Naskar', 'Guest', '1980-08-24', 'Male', NULL, NULL, '2021-08-24 16:36:24'),
('pampadas@gmail.com', 'Pampa Das', 'Guest', '1998-08-22', 'Male', 'pampa1998', NULL, '2021-08-22 11:49:05'),
('rahul@gmail.com', 'Rahul Das', 'Guest', '2021-08-09', 'Male', 'rahul2021', NULL, '2021-08-05 18:54:43'),
('rinku@gmail.com', 'Rinku Roy', 'Faculty', '2021-08-02', 'Male', 'rinku2021', NULL, '2021-08-06 21:15:13'),
('souvik@gmail.com', 'Souvik Naskar', 'Faculty', '1988-08-08', 'Male', NULL, NULL, '2021-08-23 23:03:23'),
('suman@gmail.com', 'Suman Roy', 'Guest', '1994-06-15', 'Male', 'suman1994', NULL, '2021-08-11 19:01:58'),
('sumit1kayal@gmail.com', 'Sumit Kayal', 'Faculty', '2021-08-05', 'Male', 'sumit2021', NULL, '2021-08-06 18:53:43'),
('susmita@gmail.com', 'Susmita Roy', 'Guest', '1986-02-13', 'Female', NULL, NULL, '2021-08-23 23:02:16');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `qnum` text COLLATE utf8_unicode_ci NOT NULL,
  `qtext` longtext COLLATE utf8_unicode_ci NOT NULL,
  `oid` int(11) NOT NULL,
  `fullmarks` int(11) NOT NULL,
  `qid` int(11) NOT NULL COMMENT 'Primary Key'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`qnum`, `qtext`, `oid`, `fullmarks`, `qid`) VALUES
('1.1', 'Set up a combinational circuit to obtain F = P(0, 1, 2, 3, 8, 9, 10, 11) using NAND gates only.', 27, 2, 21),
('2.1', 'Set up a circuit to divide the frequency of the given pulse train by 3.', 28, 5, 22),
('2.2', 'Set up a circuit to divide the frequency of the given pulse train by 6. Use minimum number of flip flops.', 28, 5, 23),
('2.3', 'Set up a ring counter/Johnson counter using mode control.', 26, 5, 24),
('3.1', 'Design, set up and verify the working of following synchronous counter circuits using J-K flip flops. (a) 4 bit up counter. (b) 4 bit down counter. (c) 3 bit up/down counter. (d) Mod-5 up counter. (e) Self starting mode-5 counter. (f) Self starting counter for a sequence 0, 2, 4, 5, 0, 2, 4, 5.............', 29, 10, 25),
('1.1', 'Construct the truth table for the compound proposition (?→?)↔(¬?→¬?).', 30, 2, 26),
('1.2', 'What are the contra positive, the converse and the inverse of the conditional statement “If you work hard then you will be rewarded”', 32, 2, 27),
('1.3', 'Write the symbolic representation and give its contra positive statement of “If it rains today, then I buy an umbrella”', 33, 2, 28),
('1.4', 'When do you say that two compound propositions are equivalent ?', 33, 2, 29),
('2.1', 'Show that (?→(?→?))→((?→?)→(?→?)) is a tautology.', 34, 5, 30),
('2.2', 'Using the truth table, show that the proposition ?∨¬(?∧?) is a tautology.', 35, 5, 31),
('2.3', 'Given ?= {2,3,4,5,6}, state the truth value of the statement (∃?∈?)(?+3=10 ).', 30, 5, 32),
('3.1', 'Is ¬?∧(?∨?))→? a tautology?', 36, 10, 33),
('1.1', 'Define polynomial ADT.', 37, 2, 34),
('1.2', ' b) List the application of stacks.', 38, 2, 35),
('1.3', 'c) Define queue full condition. ', 39, 2, 36),
('1.4', 'd) Define path in a tree.', 40, 2, 37),
('1.5', ' e) What is the degree of a graph? ', 37, 2, 38),
('2.1', 'Define data structure. Discuss different types of data structure their implementations applications. ', 37, 5, 39),
('2.2', 'What is an array? Discuss different types of array with examples.', 38, 5, 40),
('2.3', 'Write an algorithm for basic operations of stack', 39, 5, 41),
('2.4', ') Explain the procedure to evaluate postfix expression. Evaluate the following postfix expression 7 3 4 + - 2 4 5 / + * 6 / 7 +? ', 40, 5, 42),
('3.1', 'a) Write recursive algorithm for lists.   b) Explain the procedure to insert and delete element from sparse matrix. ', 37, 10, 43),
('3.2', 'Define binarya) search tree. Show how to insert and delete an element from binary search tree.  b) Write algorithm to insert and delete an element from binary search tree. ', 38, 10, 44),
('3.3', 'a) What is a graph? Explain the properties of graphs. b) Write breadth first traversal algorithm. Explain with an example', 39, 10, 45),
('3.4', 'a) Rearrange following numbers using quick sort: 10, 6, 3, 7, 17, 26, 56, 32, 72   b) Write a program to sort the elements using radix sort.', 40, 10, 46),
('1.1', 'Write the base of the following number systems: Decimal, Binary, Octal, and Hexadecimal. ', 41, 2, 47),
('1.2', 'Draw symbol and write the truth table of JK flip flop. ', 42, 2, 48),
('1.3', 'State the necessity of multiplexer. ', 43, 2, 49),
('1.4', 'Write excitation table of D flip flop', 44, 2, 50),
('1.5', 'List any two specifications of IC- DAC 0808', 42, 2, 51),
('2.1', 'Draw the circuit diagram of BCD to 7 segment decoder and write its truth table', 41, 5, 52),
('2.2', 'Draw the block diagram of Programmable Logic Array. ', 42, 5, 53),
('2.3', 'Minimize the following expression using K-map.  f (P, Q, R, S) = Σ m (0, 1, 4, 5, 7, 8, 9, 12, 13, 15). ', 43, 5, 54),
('2.4', 'Realize the following logic operations using only NAND gates: AND, OR, NOT. ', 41, 5, 55),
('3.1', 'Compare TTL and CMOS logic families on the basis of following:  i) Propogation delay ii) Power dissipation iii) Fan-out iv) Basic gate', 41, 10, 56),
('3.2', 'Describe the operation of 4- bit universal shift register with the help of block diagram', 42, 10, 57),
('3.3', 'Calculate analog output of 4 bit DAC for digital input is 1011. Assume VF S= 5V.', 43, 10, 58),
('3.4', 'Draw the symbol and write logic expression and truth table of the two input universal logic gates. ', 44, 10, 59);

-- --------------------------------------------------------

--
-- Table structure for table `stu_info`
--

CREATE TABLE `stu_info` (
  `exmroll` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'Primary Key',
  `sname` text COLLATE utf8_unicode_ci NOT NULL,
  `ssem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stu_info`
--

INSERT INTO `stu_info` (`exmroll`, `sname`, `ssem`) VALUES
('T91/CSE/186001', 'Sumit Kayal', 3),
('T91/CSE/186002', 'Bijay Maliya', 3),
('T91/CSE/186003', 'Bishal Laha', 3),
('T91/CSE/186004', 'Subrata Das', 3),
('T91/CSE/186005', 'Sunil Paja', 3),
('T91/CSE/186006', 'Riya Das', 3),
('T91/CSE/186007', 'Sunita Kayal', 3),
('T91/CSE/186008', 'Kusum Roy', 3),
('T91/CSE/186009', 'Krishna Dolui', 3),
('T91/CSE/186010', 'Nimay Samanta', 3),
('T91/CSE/186011', 'Laxmi Das', 3),
('T91/CSE/186012', 'Subhabrata Mondal', 3),
('T91/CSE/186013', 'Subhajit Bag', 3),
('T91/CSE/186014', 'Debobrata De', 3),
('T91/CSE/186015', 'Denonath Ghosh', 3),
('T92/CSE/186001', 'Sumit Naskar', 4),
('T92/CSE/186002', 'Nimai Maliya', 4),
('T92/CSE/186003', 'Debnath Mondal', 4),
('T92/CSE/186004', 'Subha Das', 4),
('T92/CSE/186005', 'Souvik Dhara', 4),
('T92/CSE/186006', 'Mousumi Naskar', 4),
('T92/CSE/186007', 'Lisha Kayal', 4),
('T92/CSE/186008', 'Sujay Das', 4),
('T92/CSE/186009', 'Ajay Porel', 4),
('T92/CSE/186010', 'Anikate Samanta', 4),
('T92/CSE/186011', 'Sarmistha Kanji', 4),
('T92/CSE/186012', 'Debopriya Mondal', 4),
('T92/CSE/186013', 'Subhajit De', 4),
('T92/CSE/186014', 'Debobrata Naskar', 4),
('T92/CSE/186015', 'Somnath Kanji', 4),
('T93/CSE/186001', 'Shrila Parui', 5),
('T93/CSE/186002', 'Sourav Naskar', 5),
('T93/CSE/186003', 'Mou Mondal', 5),
('T93/CSE/186004', 'Bristi samanta', 5),
('T93/CSE/186005', 'Souvik Paja', 5),
('T93/CSE/186006', 'Rani Ghosh', 5),
('T93/CSE/186007', 'Ananda Roy', 5),
('T93/CSE/186008', 'Bhaskar Nakoda', 5),
('T93/CSE/186009', 'Basudeb Porel', 5),
('T93/CSE/186010', 'Ankita Das', 5),
('T93/CSE/186011', 'Shrimanta Kanji', 5),
('T93/CSE/186012', 'Kajal Mondal', 5),
('T93/CSE/186013', 'Sanjib Naskar', 5),
('T93/CSE/186014', 'Sujay Samanta', 5),
('T93/CSE/186015', 'Suprovas Kanji', 5),
('T94/CSE/186001', 'Anisha Dhara', 6),
('T94/CSE/186002', 'Tumpa Samanata', 6),
('T94/CSE/186003', 'Jomuna Ghosh', 6),
('T94/CSE/186004', 'Disha samanta', 6),
('T94/CSE/186005', 'Sumnata Dhara', 6),
('T94/CSE/186006', 'Shrimonta Naskar', 6),
('T94/CSE/186007', 'Sajal Mondal', 6),
('T94/CSE/186008', 'Rupam Roy', 6),
('T94/CSE/186009', 'Nitai Kole', 6),
('T94/CSE/186010', 'Ankita Naskar', 6),
('T94/CSE/186011', 'Subha Bagani', 6),
('T94/CSE/186012', 'Rani Mondal', 6),
('T94/CSE/186013', 'Sanjib Das', 6),
('T94/CSE/186014', 'Sandip Samanta', 6),
('T94/CSE/186015', 'Bonani Paul', 6),
('T95/CSE/186001', 'Sudip Kayal', 7),
('T95/CSE/186002', 'Subrata Das', 7),
('T95/CSE/186003', 'Rahul Das', 7),
('T95/CSE/186004', 'Rahul Samanta', 7),
('T95/CSE/186005', 'Nilanjana Pramanik', 7),
('T95/CSE/186006', 'Debanjana Roy', 7),
('T95/CSE/186007', 'Supriya Choudhury', 7),
('T95/CSE/186008', 'Rounak Ghosh', 7),
('T95/CSE/186009', 'Rajkumar Kayal', 7),
('T95/CSE/186010', 'Ishita Ghosh', 7),
('T95/CSE/186011', 'Saikat Jana', 7),
('T95/CSE/186012', 'Rishov Naskar', 7),
('T95/CSE/186013', 'Rubi naskar', 7),
('T95/CSE/186014', 'Pritam Das', 7),
('T95/CSE/186015', 'Rachana Choudhury', 7),
('T96/CSE/186001', 'Dipak Adhikary', 8),
('T96/CSE/186002', 'Soma Das', 8),
('T96/CSE/186003', 'Pinki Roy', 8),
('T96/CSE/186004', 'Kunal Naskar', 8),
('T96/CSE/186005', 'Soumi Parui', 8),
('T96/CSE/186006', 'Sajal Nakoda', 8),
('T96/CSE/186007', 'Dipta Das', 8),
('T96/CSE/186008', 'Suchorita Kanji', 8),
('T96/CSE/186009', 'Sunil Kayal', 8),
('T96/CSE/186010', 'Anuradha Adhikary', 8),
('T96/CSE/186011', 'Saranindu Rana', 8),
('T96/CSE/186012', 'Debopriyo Ghosh', 8),
('T96/CSE/186013', 'Jayanta Mondal', 8),
('T96/CSE/186014', 'Kishna Some', 8),
('T96/CSE/186015', 'Shrabonty Roy', 8);

-- --------------------------------------------------------

--
-- Table structure for table `stu_marks`
--

CREATE TABLE `stu_marks` (
  `exroll` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'Foreign Key(stu_info)Primary Key',
  `qid` int(10) NOT NULL COMMENT 'Foreign Key(question)Primary Key',
  `marks` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stu_marks`
--

INSERT INTO `stu_marks` (`exroll`, `qid`, `marks`) VALUES
('T91/CSE/186001', 21, 2),
('T91/CSE/186001', 22, 5),
('T91/CSE/186001', 23, 5),
('T91/CSE/186001', 24, 4),
('T91/CSE/186001', 25, 8),
('T91/CSE/186001', 26, 2),
('T91/CSE/186001', 27, 2),
('T91/CSE/186001', 28, 2),
('T91/CSE/186001', 29, 2),
('T91/CSE/186001', 30, 5),
('T91/CSE/186001', 31, 5),
('T91/CSE/186001', 32, 5),
('T91/CSE/186001', 33, 10),
('T91/CSE/186001', 34, 1),
('T91/CSE/186001', 35, 2),
('T91/CSE/186001', 36, 2),
('T91/CSE/186001', 37, 2),
('T91/CSE/186001', 38, 1),
('T91/CSE/186001', 39, 4),
('T91/CSE/186001', 40, 4),
('T91/CSE/186001', 41, 4),
('T91/CSE/186001', 42, 5),
('T91/CSE/186001', 43, 9),
('T91/CSE/186001', 44, 7),
('T91/CSE/186001', 45, 6),
('T91/CSE/186001', 46, 8),
('T91/CSE/186001', 47, 2),
('T91/CSE/186001', 48, 2),
('T91/CSE/186001', 49, 1),
('T91/CSE/186001', 50, 2),
('T91/CSE/186001', 51, 2),
('T91/CSE/186001', 52, 4),
('T91/CSE/186001', 53, 4),
('T91/CSE/186001', 54, 5),
('T91/CSE/186001', 55, 5),
('T91/CSE/186001', 56, 9),
('T91/CSE/186001', 57, 8),
('T91/CSE/186001', 58, 9),
('T91/CSE/186001', 59, 9),
('T91/CSE/186002', 21, 1.5),
('T91/CSE/186002', 22, 4),
('T91/CSE/186002', 23, 5),
('T91/CSE/186002', 24, 5),
('T91/CSE/186002', 25, 10),
('T91/CSE/186002', 26, 2),
('T91/CSE/186002', 27, 1),
('T91/CSE/186002', 28, 2),
('T91/CSE/186002', 29, 1),
('T91/CSE/186002', 30, 5),
('T91/CSE/186002', 31, 4),
('T91/CSE/186002', 32, 5),
('T91/CSE/186002', 33, 9),
('T91/CSE/186002', 34, 2),
('T91/CSE/186002', 35, 1),
('T91/CSE/186002', 36, 1),
('T91/CSE/186002', 37, 1),
('T91/CSE/186002', 38, 2),
('T91/CSE/186002', 39, 3),
('T91/CSE/186002', 40, 4),
('T91/CSE/186002', 41, 4),
('T91/CSE/186002', 42, 3),
('T91/CSE/186002', 43, 8),
('T91/CSE/186002', 44, 6),
('T91/CSE/186002', 45, 7),
('T91/CSE/186002', 46, 8),
('T91/CSE/186002', 47, 2),
('T91/CSE/186002', 48, 2),
('T91/CSE/186002', 49, 2),
('T91/CSE/186002', 50, 2),
('T91/CSE/186002', 51, 1),
('T91/CSE/186002', 52, 4),
('T91/CSE/186002', 53, 4),
('T91/CSE/186002', 54, 5),
('T91/CSE/186002', 55, 4),
('T91/CSE/186002', 56, 5),
('T91/CSE/186002', 57, 6),
('T91/CSE/186002', 58, 8),
('T91/CSE/186002', 59, 8),
('T91/CSE/186003', 34, 2),
('T91/CSE/186003', 35, 2),
('T91/CSE/186003', 36, 2),
('T91/CSE/186003', 37, 1),
('T91/CSE/186003', 38, 1),
('T91/CSE/186003', 39, 3),
('T91/CSE/186003', 40, 4),
('T91/CSE/186003', 41, 4),
('T91/CSE/186003', 42, 4),
('T91/CSE/186003', 43, 8),
('T91/CSE/186003', 44, 7),
('T91/CSE/186003', 45, 9),
('T91/CSE/186003', 46, 10),
('T91/CSE/186003', 47, 2),
('T91/CSE/186003', 48, 2),
('T91/CSE/186003', 49, 1),
('T91/CSE/186003', 50, 1),
('T91/CSE/186003', 51, 1),
('T91/CSE/186003', 52, 4),
('T91/CSE/186003', 53, 5),
('T91/CSE/186003', 54, 4),
('T91/CSE/186003', 55, 4),
('T91/CSE/186003', 56, 8),
('T91/CSE/186003', 57, 9),
('T91/CSE/186003', 58, 9),
('T91/CSE/186003', 59, 8),
('T91/CSE/186004', 21, 2),
('T91/CSE/186004', 22, 3),
('T91/CSE/186004', 23, 5),
('T91/CSE/186004', 24, 5),
('T91/CSE/186004', 25, 8),
('T91/CSE/186004', 34, 2),
('T91/CSE/186004', 35, 2),
('T91/CSE/186004', 36, 2),
('T91/CSE/186004', 37, 1),
('T91/CSE/186004', 38, 2),
('T91/CSE/186004', 39, 4),
('T91/CSE/186004', 40, 4),
('T91/CSE/186004', 41, 5),
('T91/CSE/186004', 42, 3),
('T91/CSE/186004', 43, 8),
('T91/CSE/186004', 44, 9),
('T91/CSE/186004', 45, 7),
('T91/CSE/186004', 46, 9),
('T91/CSE/186004', 47, 2),
('T91/CSE/186004', 48, 2),
('T91/CSE/186004', 49, 2),
('T91/CSE/186004', 50, 2),
('T91/CSE/186004', 51, 1),
('T91/CSE/186004', 52, 4),
('T91/CSE/186004', 53, 4),
('T91/CSE/186004', 54, 4),
('T91/CSE/186004', 55, 5),
('T91/CSE/186004', 56, 9),
('T91/CSE/186004', 57, 7),
('T91/CSE/186004', 58, 9),
('T91/CSE/186004', 59, 8),
('T91/CSE/186005', 21, 2),
('T91/CSE/186005', 22, 4),
('T91/CSE/186005', 23, 4),
('T91/CSE/186005', 24, 4),
('T91/CSE/186005', 25, 9),
('T91/CSE/186005', 34, 2),
('T91/CSE/186005', 35, 2),
('T91/CSE/186005', 36, 1),
('T91/CSE/186005', 37, 1),
('T91/CSE/186005', 38, 1),
('T91/CSE/186005', 39, 4),
('T91/CSE/186005', 40, 4),
('T91/CSE/186005', 41, 5),
('T91/CSE/186005', 42, 5),
('T91/CSE/186005', 43, 9),
('T91/CSE/186005', 44, 7),
('T91/CSE/186005', 45, 8),
('T91/CSE/186005', 46, 9),
('T91/CSE/186005', 47, 2),
('T91/CSE/186005', 48, 2),
('T91/CSE/186005', 49, 1),
('T91/CSE/186005', 50, 1),
('T91/CSE/186005', 51, 2),
('T91/CSE/186005', 52, 4),
('T91/CSE/186005', 53, 5),
('T91/CSE/186005', 54, 4),
('T91/CSE/186005', 55, 5),
('T91/CSE/186005', 56, 9),
('T91/CSE/186005', 57, 9),
('T91/CSE/186005', 58, 8),
('T91/CSE/186005', 59, 6),
('T91/CSE/186006', 21, 2),
('T91/CSE/186006', 22, 5),
('T91/CSE/186006', 23, 5),
('T91/CSE/186006', 24, 5),
('T91/CSE/186006', 25, 10),
('T91/CSE/186006', 34, 1),
('T91/CSE/186006', 35, 1),
('T91/CSE/186006', 36, 2),
('T91/CSE/186006', 37, 2),
('T91/CSE/186006', 38, 1),
('T91/CSE/186006', 39, 4),
('T91/CSE/186006', 40, 0),
('T91/CSE/186006', 41, 3),
('T91/CSE/186006', 42, 3),
('T91/CSE/186006', 43, 4),
('T91/CSE/186006', 44, 9),
('T91/CSE/186006', 45, 9),
('T91/CSE/186006', 46, 7),
('T91/CSE/186006', 47, 1),
('T91/CSE/186006', 48, 1),
('T91/CSE/186006', 49, 2),
('T91/CSE/186006', 50, 2),
('T91/CSE/186006', 51, 1),
('T91/CSE/186006', 52, 4),
('T91/CSE/186006', 53, 4),
('T91/CSE/186006', 54, 4),
('T91/CSE/186006', 55, 5),
('T91/CSE/186006', 56, 7),
('T91/CSE/186006', 57, 8),
('T91/CSE/186006', 58, 9),
('T91/CSE/186006', 59, 8),
('T91/CSE/186007', 21, 1),
('T91/CSE/186007', 22, 4),
('T91/CSE/186007', 23, 4),
('T91/CSE/186007', 24, 4),
('T91/CSE/186007', 25, 9),
('T91/CSE/186007', 34, 1),
('T91/CSE/186007', 35, 1),
('T91/CSE/186007', 36, 1),
('T91/CSE/186007', 37, 1),
('T91/CSE/186007', 38, 2),
('T91/CSE/186007', 39, 3),
('T91/CSE/186007', 40, 3),
('T91/CSE/186007', 41, 3),
('T91/CSE/186007', 42, 4),
('T91/CSE/186007', 43, 7),
('T91/CSE/186007', 44, 7),
('T91/CSE/186007', 45, 7),
('T91/CSE/186007', 46, 8),
('T91/CSE/186007', 47, 2),
('T91/CSE/186007', 48, 1),
('T91/CSE/186007', 49, 2),
('T91/CSE/186007', 50, 1),
('T91/CSE/186007', 51, 2),
('T91/CSE/186007', 52, 4),
('T91/CSE/186007', 53, 4),
('T91/CSE/186007', 54, 4),
('T91/CSE/186007', 55, 5),
('T91/CSE/186007', 56, 7),
('T91/CSE/186007', 57, 8),
('T91/CSE/186007', 58, 7),
('T91/CSE/186007', 59, 8),
('T91/CSE/186008', 21, 2),
('T91/CSE/186008', 22, 3),
('T91/CSE/186008', 23, 5),
('T91/CSE/186008', 24, 5),
('T91/CSE/186008', 25, 9),
('T91/CSE/186008', 34, 2),
('T91/CSE/186008', 35, 2),
('T91/CSE/186008', 36, 1),
('T91/CSE/186008', 37, 1),
('T91/CSE/186008', 38, 1),
('T91/CSE/186008', 39, 5),
('T91/CSE/186008', 40, 4),
('T91/CSE/186008', 41, 5),
('T91/CSE/186008', 42, 4),
('T91/CSE/186008', 43, 9),
('T91/CSE/186008', 44, 8),
('T91/CSE/186008', 45, 7),
('T91/CSE/186008', 46, 8),
('T91/CSE/186008', 47, 1),
('T91/CSE/186008', 48, 2),
('T91/CSE/186008', 49, 1),
('T91/CSE/186008', 50, 2),
('T91/CSE/186008', 51, 1),
('T91/CSE/186008', 52, 3),
('T91/CSE/186008', 53, 2),
('T91/CSE/186008', 54, 4),
('T91/CSE/186008', 55, 5),
('T91/CSE/186008', 56, 6),
('T91/CSE/186008', 57, 5),
('T91/CSE/186008', 58, 6),
('T91/CSE/186008', 59, 7),
('T91/CSE/186009', 21, 2),
('T91/CSE/186009', 22, 5),
('T91/CSE/186009', 23, 5),
('T91/CSE/186009', 24, 4),
('T91/CSE/186009', 25, 7),
('T91/CSE/186009', 34, 2),
('T91/CSE/186009', 35, 1),
('T91/CSE/186009', 36, 2),
('T91/CSE/186009', 37, 1),
('T91/CSE/186009', 38, 2),
('T91/CSE/186009', 39, 4),
('T91/CSE/186009', 40, 4),
('T91/CSE/186009', 41, 4),
('T91/CSE/186009', 42, 5),
('T91/CSE/186009', 43, 9),
('T91/CSE/186009', 44, 8),
('T91/CSE/186009', 45, 9),
('T91/CSE/186009', 46, 7),
('T91/CSE/186009', 47, 2),
('T91/CSE/186009', 48, 2),
('T91/CSE/186009', 49, 2),
('T91/CSE/186009', 50, 2),
('T91/CSE/186009', 51, 1),
('T91/CSE/186009', 52, 4),
('T91/CSE/186009', 53, 4),
('T91/CSE/186009', 54, 4),
('T91/CSE/186009', 55, 4),
('T91/CSE/186009', 56, 9),
('T91/CSE/186009', 57, 8),
('T91/CSE/186009', 58, 7),
('T91/CSE/186009', 59, 6),
('T91/CSE/186010', 21, 2),
('T91/CSE/186010', 22, 4),
('T91/CSE/186010', 23, 4),
('T91/CSE/186010', 24, 4),
('T91/CSE/186010', 25, 10),
('T91/CSE/186010', 34, 1),
('T91/CSE/186010', 35, 2),
('T91/CSE/186010', 36, 1),
('T91/CSE/186010', 37, 2),
('T91/CSE/186010', 38, 1),
('T91/CSE/186010', 39, 4),
('T91/CSE/186010', 40, 4),
('T91/CSE/186010', 41, 4),
('T91/CSE/186010', 42, 4),
('T91/CSE/186010', 43, 9),
('T91/CSE/186010', 44, 9),
('T91/CSE/186010', 45, 9),
('T91/CSE/186010', 46, 8),
('T91/CSE/186010', 47, 1),
('T91/CSE/186010', 48, 2),
('T91/CSE/186010', 49, 1),
('T91/CSE/186010', 50, 2),
('T91/CSE/186010', 51, 2),
('T91/CSE/186010', 52, 4),
('T91/CSE/186010', 53, 4),
('T91/CSE/186010', 54, 4),
('T91/CSE/186010', 55, 5),
('T91/CSE/186010', 56, 8),
('T91/CSE/186010', 57, 7),
('T91/CSE/186010', 58, 9),
('T91/CSE/186010', 59, 8),
('T91/CSE/186011', 21, 1),
('T91/CSE/186011', 22, 4),
('T91/CSE/186011', 23, 4),
('T91/CSE/186011', 24, 4),
('T91/CSE/186011', 25, 10),
('T91/CSE/186011', 34, 2),
('T91/CSE/186011', 35, 2),
('T91/CSE/186011', 36, 2),
('T91/CSE/186011', 37, 1),
('T91/CSE/186011', 38, 2),
('T91/CSE/186011', 39, 3),
('T91/CSE/186011', 40, 3),
('T91/CSE/186011', 41, 3),
('T91/CSE/186011', 42, 5),
('T91/CSE/186011', 43, 6),
('T91/CSE/186011', 44, 5),
('T91/CSE/186011', 45, 5),
('T91/CSE/186011', 46, 8),
('T91/CSE/186011', 47, 1),
('T91/CSE/186011', 48, 2),
('T91/CSE/186011', 49, 2),
('T91/CSE/186011', 50, 1),
('T91/CSE/186011', 51, 2),
('T91/CSE/186011', 52, 4),
('T91/CSE/186011', 53, 3),
('T91/CSE/186011', 54, 4),
('T91/CSE/186011', 55, 3),
('T91/CSE/186011', 56, 8),
('T91/CSE/186011', 57, 7),
('T91/CSE/186011', 58, 8),
('T91/CSE/186011', 59, 9),
('T91/CSE/186012', 21, 2),
('T91/CSE/186012', 22, 5),
('T91/CSE/186012', 23, 5),
('T91/CSE/186012', 24, 5),
('T91/CSE/186012', 25, 7),
('T91/CSE/186012', 34, 1),
('T91/CSE/186012', 35, 1),
('T91/CSE/186012', 36, 1),
('T91/CSE/186012', 37, 1),
('T91/CSE/186012', 38, 1),
('T91/CSE/186012', 39, 3),
('T91/CSE/186012', 40, 4),
('T91/CSE/186012', 41, 5),
('T91/CSE/186012', 42, 2),
('T91/CSE/186012', 43, 2),
('T91/CSE/186012', 44, 3),
('T91/CSE/186012', 45, 5),
('T91/CSE/186012', 46, 9),
('T91/CSE/186012', 47, 1),
('T91/CSE/186012', 48, 2),
('T91/CSE/186012', 49, 2),
('T91/CSE/186012', 50, 1),
('T91/CSE/186012', 51, 2),
('T91/CSE/186012', 52, 3),
('T91/CSE/186012', 53, 3),
('T91/CSE/186012', 54, 3),
('T91/CSE/186012', 55, 4),
('T91/CSE/186012', 56, 6),
('T91/CSE/186012', 57, 6),
('T91/CSE/186012', 58, 8),
('T91/CSE/186012', 59, 9),
('T91/CSE/186013', 21, 1),
('T91/CSE/186013', 22, 4),
('T91/CSE/186013', 23, 4),
('T91/CSE/186013', 24, 5),
('T91/CSE/186013', 25, 9),
('T91/CSE/186013', 34, 2),
('T91/CSE/186013', 35, 2),
('T91/CSE/186013', 36, 2),
('T91/CSE/186013', 37, 1),
('T91/CSE/186013', 38, 2),
('T91/CSE/186013', 39, 4),
('T91/CSE/186013', 40, 4),
('T91/CSE/186013', 41, 4),
('T91/CSE/186013', 42, 4),
('T91/CSE/186013', 43, 8),
('T91/CSE/186013', 44, 8),
('T91/CSE/186013', 45, 8),
('T91/CSE/186013', 46, 9),
('T91/CSE/186013', 47, 1),
('T91/CSE/186013', 48, 2),
('T91/CSE/186013', 49, 1),
('T91/CSE/186013', 50, 2),
('T91/CSE/186013', 51, 2),
('T91/CSE/186013', 52, 4),
('T91/CSE/186013', 53, 4),
('T91/CSE/186013', 54, 3),
('T91/CSE/186013', 55, 3),
('T91/CSE/186013', 56, 8),
('T91/CSE/186013', 57, 8),
('T91/CSE/186013', 58, 9),
('T91/CSE/186013', 59, 7),
('T91/CSE/186014', 21, 2),
('T91/CSE/186014', 22, 4),
('T91/CSE/186014', 23, 5),
('T91/CSE/186014', 24, 5),
('T91/CSE/186014', 25, 10),
('T91/CSE/186014', 34, 1),
('T91/CSE/186014', 35, 2),
('T91/CSE/186014', 36, 1),
('T91/CSE/186014', 37, 1),
('T91/CSE/186014', 38, 2),
('T91/CSE/186014', 39, 4),
('T91/CSE/186014', 40, 4),
('T91/CSE/186014', 41, 4),
('T91/CSE/186014', 42, 5),
('T91/CSE/186014', 43, 9),
('T91/CSE/186014', 44, 9),
('T91/CSE/186014', 45, 8),
('T91/CSE/186014', 46, 7),
('T91/CSE/186014', 47, 2),
('T91/CSE/186014', 48, 1),
('T91/CSE/186014', 49, 2),
('T91/CSE/186014', 50, 2),
('T91/CSE/186014', 51, 1),
('T91/CSE/186014', 52, 4),
('T91/CSE/186014', 53, 4),
('T91/CSE/186014', 54, 4),
('T91/CSE/186014', 55, 5),
('T91/CSE/186014', 56, 8),
('T91/CSE/186014', 57, 8),
('T91/CSE/186014', 58, 9),
('T91/CSE/186014', 59, 5),
('T91/CSE/186015', 21, 2),
('T91/CSE/186015', 22, 4),
('T91/CSE/186015', 23, 4),
('T91/CSE/186015', 24, 4),
('T91/CSE/186015', 25, 9),
('T91/CSE/186015', 34, 2),
('T91/CSE/186015', 35, 2),
('T91/CSE/186015', 36, 1),
('T91/CSE/186015', 37, 1),
('T91/CSE/186015', 38, 2),
('T91/CSE/186015', 39, 4),
('T91/CSE/186015', 40, 4),
('T91/CSE/186015', 41, 4),
('T91/CSE/186015', 42, 4),
('T91/CSE/186015', 43, 9),
('T91/CSE/186015', 44, 8),
('T91/CSE/186015', 45, 8),
('T91/CSE/186015', 46, 8),
('T91/CSE/186015', 47, 1),
('T91/CSE/186015', 48, 2),
('T91/CSE/186015', 49, 1),
('T91/CSE/186015', 50, 1),
('T91/CSE/186015', 51, 2),
('T91/CSE/186015', 52, 4),
('T91/CSE/186015', 53, 4),
('T91/CSE/186015', 54, 4),
('T91/CSE/186015', 55, 3),
('T91/CSE/186015', 56, 8),
('T91/CSE/186015', 57, 8),
('T91/CSE/186015', 58, 7),
('T91/CSE/186015', 59, 6);

-- --------------------------------------------------------

--
-- Table structure for table `stu_midmarks`
--

CREATE TABLE `stu_midmarks` (
  `exroll` text COLLATE utf8_unicode_ci NOT NULL,
  `qid` int(10) NOT NULL,
  `marks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `temporay_prf_course`
--

CREATE TABLE `temporay_prf_course` (
  `email` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'Primary Key',
  `course1` text COLLATE utf8_unicode_ci NOT NULL,
  `course2` text COLLATE utf8_unicode_ci NOT NULL,
  `course3` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `temporay_prf_course`
--

INSERT INTO `temporay_prf_course` (`email`, `course1`, `course2`, `course3`) VALUES
('debopriyo@gmail.com', 'CSCP606', 'CSHL405', 'CSCL404'),
('kalyan@gmail.com', 'CSCP307', 'CSCL504', 'CSCP306'),
('souvik@gmail.com', 'CSCP308', 'CSCL403', 'CSCL304'),
('susmita@gmail.com', 'CSCP307', 'CSCL403', 'CSCL402');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assign_course`
--
ALTER TABLE `assign_course`
  ADD PRIMARY KEY (`course_id`(256),`year`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`CID`(256));

--
-- Indexes for table `course_outcome`
--
ALTER TABLE `course_outcome`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`exmroll`(256),`oid`);

--
-- Indexes for table `mid_question`
--
ALTER TABLE `mid_question`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`Email`(256));

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `stu_info`
--
ALTER TABLE `stu_info`
  ADD PRIMARY KEY (`exmroll`(256));

--
-- Indexes for table `stu_marks`
--
ALTER TABLE `stu_marks`
  ADD PRIMARY KEY (`exroll`(256),`qid`);

--
-- Indexes for table `stu_midmarks`
--
ALTER TABLE `stu_midmarks`
  ADD PRIMARY KEY (`exroll`(256),`qid`);

--
-- Indexes for table `temporay_prf_course`
--
ALTER TABLE `temporay_prf_course`
  ADD PRIMARY KEY (`email`(256));

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course_outcome`
--
ALTER TABLE `course_outcome`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key', AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `mid_question`
--
ALTER TABLE `mid_question`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key', AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key', AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
