<?php

namespace Survey\SurveyPage\Api\Data;

interface AnswertInterface
{
    /**#@+
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const SURVEY_ID = 'survey_id';
    const ANSWER1 = 'answer1';
    const ANSWER2 = 'answer2';
    /**#@-*/


    /**
     * Get Title
     *
     * @return string|null
     */
    public function getAnswer1();

    /**
     * Get Content
     *
     * @return string|null
     */
    public function getAnswer2();


    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId();

    /**
     * Set Title
     *
     * @param string $title
     * @return $this
     */
    public function setAnswe1($answer1);

    /**
     * Set Content
     *
     * @param string $content
     * @return $this
     */
    public function setAnswer2($answer2);


    /**
     * Set ID
     *
     * @param int $id
     * @return $this
     */
    public function setId($id);
}