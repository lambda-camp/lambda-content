# lambda camp - Study Guidance for New Students in IT

## Description

The project aims to assist new students entering the field of Information Technology (IT) by providing a comprehensive guide that covers various areas within this rapidly expanding domain. As technology evolves, students often face uncertainty regarding which career path to pursue and what initial steps to take to achieve their goals. This guide serves as a supportive resource to help them navigate their options and make informed decisions, rather than dictating their success. It will cover a wide range of relevant topics for beginners in IT, from basic concepts to emerging trends and best practices.

## Running

To run you have to install:
- PHP (8.1.*)
- Composer
- Node.js (20.*)
- Your preferred database (MySQL, PostgreSQL...)

### Configuration

You have to update your `.env` configuration properties to manage your instance. See [Laravel configuration](https://laravel.com/docs/10.x/configuration).

## Objectives

### General Objective
To develop a comprehensive guide that assists new students and professionals from other fields in transitioning to the Information Technology sector by offering clear explanations, practical tools, and strategies to overcome the challenges of the IT industry while promoting ongoing professional development.

### Specific Objectives
- Provide a detailed overview of the main areas and trends in Information Technology, highlighting their applications and demands in the job market.
- Offer step-by-step guides and instructions on various IT fields to help readers identify their interests and choose the most suitable specialization for their professional growth.
- Curate a list of resources for professional development, including books, online courses, communities, and relevant events for growth in the IT field.
- Emphasize best practices and ethics in the virtual environment, addressing issues of security, privacy, and professional behavior.
- Encourage active participation in online communities and events, such as forums and study groups, to foster networking and mutual support among IT professionals and students.

## Requirements

### Functional Requirements
The project will serve as a guide for new entrants in the technology field, providing segmented explanations of the various options available for deeper study. With a focus on agile performance, users can access the guide without the need for additional software, ensuring smooth execution without restrictions on access or usability. It will allow users to navigate and search for content that summarizes each topic, helping them understand where their interests align with job market demands.

### Non-Functional Requirements
The project prioritizes accessibility and does not require high processing power for use. It will feature an intuitive and simple interface, allowing for organic information loading with a table of contents and links for easy navigation. The project encourages community involvement to facilitate support and assistance, with curated suggestions for community engagement to ensure safety and avoid promoting malicious groups.

## Diagrams

To improve software structuring, modeling is one of the main foundations for development. Through various models or diagrams, different aspects of the system can be explored, helping programmers and clients better understand its structure.

### Class Diagram
The class diagram represents the main purposes of UML through its classes, attributes, methods, and relationships. It describes the system's structure and demonstrates the connections between its components. The class diagram includes the classes: `User`, `Contribution`, `Content`, `UserType`, and `TechArea`, along with their relationships represented by lines and cardinalities.

> **Note:** A user may not necessarily need to contribute; they can be simply a student or a contributor seeking to use the system for self-hosting. To make a contribution, one must provide a title, description, and other attributes while associating the content with a relevant tech area.

![Class Diagram](https://github.com/user-attachments/assets/b20dc976-4da5-453b-9058-61d8157f8541)

*Source: Authors, 2024.*

### General Use Case Diagram
The use case diagram presents the structure and functionality of the system through elements such as use cases that specify services, tasks, or functionalities; actors that represent the different users; and their respective relationships. 

> **Note:** The user actor must create an account and can only perform other operations after authenticating in the system, as shown in the relationship of requirements. Operations include CRUD (Create, Read, Update, Delete) actions for managing content.

![Use Case Diagram](https://github.com/user-attachments/assets/1d214c4c-8e46-4aa2-b751-402e531cfb63)

*Source: Authors, 2024.*

## Methodology

A field survey will be conducted to gather insights and understand the questions of students enrolled in technology courses, as well as those in other disciplines contemplating a career transition. The project will be published using the GitHub platform, which enables code hosting and version control. Following agile methodologies, the project will emphasize flexibility, interaction, and collaboration among all development members, incorporating feedback from potential users to maintain quality until the project's final delivery.

## Expected Outcomes

The project aims to empower readers to begin their careers in technology with awareness, basic understanding, and confidence to choose their study segments. It seeks to demystify the complexities and confusions that may arise when entering such a broad academic and professional field. This guide will serve as a supportive resource for anyone feeling lost and uncertain, functioning as a literal guide for those seeking success and fulfillment in their careers in the Information Technology industry.
