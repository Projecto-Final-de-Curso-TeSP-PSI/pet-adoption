import React, { Component } from 'react';

class ProfileSettingsContent extends Component {
    render() {
        return (
            <div className="row">
                <div className="col-lg-12">
                    <div className="profile-settings-form mb-30">
                        <form>
                            <div className="form-group">
                                <label className="form-label">Upload New Picture</label>
                                <input type="file" className="form-control form-control-file" />
                                <small className="text-muted form-text">Picture size 80 x 80 pixels.</small>
                            </div>
                            <div className="form-group">
                                <label className="form-label">Name</label>
                                <input type="text" className="form-control" />
                            </div>
                            <div className="form-group">
                                <label className="form-label">Bio</label>
                                <textarea rows="3" className="form-control"></textarea>
                            </div>
                            <div className="form-group">
                                <label className="form-label">Location</label>
                                <input type="text" className="form-control" />
                            </div>
                            <div className="form-group">
                                <label className="form-label">Language</label>
                                <input type="text" className="form-control" />
                            </div>
                            <div className="form-group">
                                <label className="form-label">Birthday Date</label>
                                <input type="text" className="form-control" />
                            </div>
                            <div className="form-group">
                                <label className="form-label">Phone</label>
                                <input type="text" className="form-control" />
                            </div>
                            <div className="form-group">
                                <label className="form-label">Email</label>
                                <input type="text" className="form-control" />
                            </div>
                            <div className="text-center">
                                <button type="submit" className="btn btn-primary">Update Settings</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        );
    }
}

export default ProfileSettingsContent;