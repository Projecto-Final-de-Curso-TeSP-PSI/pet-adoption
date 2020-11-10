import React, { Component } from 'react';
import * as Icon from 'react-feather';

class TodosStyleTwo extends Component {
    render() {
        return (
            <div className="row">
                <div className="col-lg-12">
                    <div className="card mb-30">
                        <div className="card-body todo-list-style-two">
                            <div className="card-header">
                                <h5 className="card-title">Todo List Style Two</h5>
                            </div>

                            <form className="add-new-task">
                                <input placeholder="What do you need to do today?" type="text" className="form-control" />
                                <button type="submit" className="btn btn-primary">Add</button>
                            </form>

                            <div className="row">
                                <div className="col-lg-6">
                                    <ul>
                                        <li>
                                            <label className="control control-checkbox">
                                                <input type="checkbox" />
                                                <span className="control-indicator"></span>
                                            </label>
                                            <span className="task">Take a training className</span>
                                            <button type="button" className="close-btn btn">
                                                <Icon.X className="icon wh-15 mt-minus-4" />
                                            </button>
                                        </li>
                                        <li>
                                            <label className="control control-checkbox">
                                                <input type="checkbox" />
                                                <span className="control-indicator"></span>
                                            </label>
                                            <span className="task">Pick up kids from school</span>
                                            <button type="button" className="close-btn btn">
                                                <Icon.X className="icon wh-15 mt-minus-4" />
                                            </button>
                                        </li>
                                        <li>
                                            <label className="control control-checkbox">
                                                <input type="checkbox" />
                                                <span className="control-indicator"></span>
                                            </label>
                                            <span className="task">Print Statements</span>
                                            <button type="button" className="close-btn btn">
                                                <Icon.X className="icon wh-15 mt-minus-4" />
                                            </button>
                                        </li>
                                        <li>
                                            <label className="control control-checkbox">
                                                <input type="checkbox" />
                                                <span className="control-indicator"></span>
                                            </label>
                                            <span className="task">Meeting with team</span>
                                            <button type="button" className="close-btn btn">
                                                <Icon.X className="icon wh-15 mt-minus-4" />
                                            </button>
                                        </li>
                                        <li>
                                            <label className="control control-checkbox">
                                                <input type="checkbox" />
                                                <span className="control-indicator"></span>
                                            </label>
                                            <span className="task">Create invoice</span>
                                            <button type="button" className="close-btn btn">
                                                <Icon.X className="icon wh-15 mt-minus-4" />
                                            </button>
                                        </li>
                                    </ul>
                                </div>

                                <div className="col-lg-6">
                                    <ul>
                                        <li>
                                            <label className="control control-checkbox">
                                                <input type="checkbox" />
                                                <span className="control-indicator"></span>
                                            </label>
                                            <span className="task">Attending a seminar</span>
                                            <button type="button" className="close-btn btn">
                                                <Icon.X className="icon wh-15 mt-minus-4" />
                                            </button>
                                        </li>
                                        <li>
                                            <label className="control control-checkbox">
                                                <input type="checkbox" />
                                                <span className="control-indicator"></span>
                                            </label>
                                            <span className="task">Project meeting</span>
                                            <button type="button" className="close-btn btn">
                                                <Icon.X className="icon wh-15 mt-minus-4" />
                                            </button>
                                        </li>
                                        <li>
                                            <label className="control control-checkbox">
                                                <input type="checkbox" />
                                                <span className="control-indicator"></span>
                                            </label>
                                            <span className="task">Attending a seminar</span>
                                            <button type="button" className="close-btn btn">
                                                <Icon.X className="icon wh-15 mt-minus-4" />
                                            </button>
                                        </li>
                                        <li>
                                            <label className="control control-checkbox">
                                                <input type="checkbox" />
                                                <span className="control-indicator"></span>
                                            </label>
                                            <span className="task">Prepare for presentation</span>
                                            <button type="button" className="close-btn btn">
                                                <Icon.X className="icon wh-15 mt-minus-4" />
                                            </button>
                                        </li>
                                        <li>
                                            <label className="control control-checkbox">
                                                <input type="checkbox" />
                                                <span className="control-indicator"></span>
                                            </label>
                                            <span className="task">Meeting with team</span>
                                            <button type="button" className="close-btn btn">
                                                <Icon.X className="icon wh-15 mt-minus-4" />
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

export default TodosStyleTwo;